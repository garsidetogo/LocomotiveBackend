<?php

namespace EngineBundle\Consumer;

use Goutte\Client;
use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
use Symfony\Component\DomCrawler\Crawler;

class AppTagScraperConsumer implements ConsumerInterface
{
    /** @var array $tags */
    private $tags;

    public function __construct()
    {
        echo "Started...";
    }

    public function execute(AMQPMessage $msg)
    {
        //Process picture upload.
        //$msg will be an instance of `PhpAmqpLib\Message\AMQPMessage` with the $msg->body being the data sent over RabbitMQ.
        if ($msg == null) {
            //log message null
        } else {
            $data = $msg->body;
            //data will be AppId

            $appId = 440900;
            $queryUrl = "http://store.steampowered.com/app/$appId/";

            /** @var Client $client */
            $client = new Client();
            /** @var Crawler $crawler */
            $crawler = $client->request('GET', $queryUrl);

            if ($crawler->getUri() == "http://store.steampowered.com/agecheck/app/$appId/") {
                echo "Automating Age Check...\n";
                $form = $crawler->filter('#agecheck_form')->form();
                $form['ageYear'] = 1900;

                $crawler = $client->submit($form);
            }

            /** @var $node */
            $crawler->filter('.popular_tags > a')->each(function($node) {
                $this->tags[] = trim($node->text());
            });

            print_r($this->tags);
        }
    }
}