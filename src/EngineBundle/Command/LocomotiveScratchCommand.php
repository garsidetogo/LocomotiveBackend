<?php

namespace EngineBundle\Command;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ODM\MongoDB\DocumentManager;
use Goutte\Client;
use ModelBundle\Document\App;
use ModelBundle\Repository\AppRepository;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DomCrawler\Crawler;
use Utilities\RabbitMQUtilities;

/**
 * Class LocomotiveScratchCommand
 * @package EngineBundle\Command
 */
class LocomotiveScratchCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('locomotive:scratch-command')
            ->setDescription('...')
            ->addArgument('appId', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $appId = $input->getArgument('appId');
        /** @var DocumentManager $dm */
        $dm = $this->getContainer()->get('doctrine_mongodb')->getManager();

        /** @var RabbitMQUtilities $rabbitUtils */
        $rabbitUtils = $this->getContainer()->get("rabbitmq_utilities");

        /*$temp = array("yes" => "okay");
        $jsonData = json_encode($temp, JSON_PRETTY_PRINT);
        $rabbitUtils->sendMessage("AppTagScraperConsumer", "new", "App", $jsonData);*/

        //$app = new App();
        //$app->setAppId($appId);
        //todo make name unique id
        //$app->setName("Temp");

        //$dm->persist($app);
        //$dm->flush();

        /** @var AppRepository $repo */
        $repo = $dm->getRepository("ModelBundle:App");
        /** @var ArrayCollection $docs */
        $docs = $repo->findAllOrderedByName();
        foreach ($docs as $doc) {
            print_r($doc);
        }
    }
}

