<?php

namespace Utilities;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use Symfony\Component\DependencyInjection\Container;

/**
 * Created by PhpStorm.
 * User: ben
 * Date: 3/26/17
 * Time: 10:13 PM
 */
class RabbitMQUtilities
{

    /** @var Container $container */
    private $container;

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * send a message to rabbit
     * @param string $queue
     * @param string $type
     * @param string $contentType
     * @param string $jsonData
     */
    public function sendMessage($queue, $type, $contentType, $jsonData)
    {
        $host = $this->container->getParameter("rabbitmq_host");
        $port = $this->container->getParameter("rabbitmq_port");
        $user = $this->container->getParameter("rabbitmq_user");
        $pass = $this->container->getParameter("rabbitmq_password");

        $connection = new AMQPStreamConnection($host, $port, $user, $pass);
        $channel = $connection->channel();
        $channel->queue_bind($queue, "components", $queue.$type.$contentType);
        //$channel->queue_declare($queue, false, false, false, false);

        $msg = new AMQPMessage($jsonData);
        $channel->basic_publish($msg, 'components', $queue.$type.$contentType);

        echo "Sent a message to $queue with routing key $queue.$type.$contentType\n";

        $channel->close();
        $connection->close();
    }
}
