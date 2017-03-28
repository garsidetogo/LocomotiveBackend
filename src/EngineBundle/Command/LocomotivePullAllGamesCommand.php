<?php

namespace EngineBundle\Command;

use ClassesWithParents\E;
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
 * Class LocomotivePullAllGamesCommand
 * @package EngineBundle\Command
 */
class LocomotivePullAllGamesCommand extends ContainerAwareCommand
{

    /** @var  RabbitMQUtilities $rabbitUtilities */
    private $rabbitUtilities;

    /** @var  DocumentManager $documentManager */
    private $dm;

    /** @var AppRepository $repo */
    private $repo;

    /** @var int $tempCounter */
    private $tempCounter;

    protected function configure()
    {
        $this
            ->setName('locomotive:pull-all-games')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //setup utils and repo
        $this->rabbitUtilities = $this->getContainer()->get("rabbitmq_utilities");
        $this->dm = $this->getContainer()->get('doctrine_mongodb')->getManager();
        /** @var AppRepository $repo */
        $this->repo = $this->dm->getRepository("ModelBundle:App");


        //grab last page and begin looping
        $lastPage = $this->getLastGamesPage();
        echo "Page containing oldest games is page $lastPage...\n";
        sleep(2);

        //page loop
        for ($i = $lastPage; $i > 0; $i--) {
            echo "Querying page $i...\n";

            $gamesUrl = "http://store.steampowered.com/search/?sort_by=Released_DESC&category1=998&page=$i";

            //setup http stuff
            /** @var Client $client */
            $client = new Client();
            /** @var Crawler $crawler */
            $crawler = $client->request('GET', $gamesUrl);

            //filter crawler results
            $crawler->filter('#search_result_container > div > a')->each(function (Crawler $node) {
                /** @var Crawler $temp */
                $attributes = $node->extract(array("_text", "href"));
                foreach ($attributes as $attribute) {
                    if (count($attribute) > 1) {
                        $matches = array();
                        $success = preg_match('#/\d{1,}/#', $attribute[1], $matches);
                        if ($success) {
                            $appId = trim($matches[0], '/');
                            /** @var App $app */
                            $app = $this->repo->findOneByAppId((int) $appId);
                            if (!$app) {
                                $app = new App();
                                $app->setAppId($appId);
                                $this->dm->persist($app);
                                $this->dm->flush();

                                echo "Saving new App with AppId: $appId\n";
                                $jsonData = json_encode(array("type" => "new", "contentType" => "App", "appId" => $appId), JSON_PRETTY_PRINT);
                                $this->rabbitUtilities->sendMessage("AppTagScraperConsumer", "new", "App", $jsonData);
                            } else {
                                echo "Found existing document for this app: $appId\n";
                            }
                        }
                    }
                }
            });
        }

        echo "Completed pulling games!\n";
    }

    protected function getLastGamesPage()
    {
        $page1Url = "http://store.steampowered.com/search/?sort_by=Released_DESC&category1=998&page=1";

        /** @var Client $client */
        $client = new Client();
        /** @var Crawler $crawler */
        $crawler = $client->request('GET', $page1Url);

        //filter crawler results
        $val = $crawler->filter('.search_pagination_right > a')->each(function (Crawler $node) {
            return (int) $node->text();
        });

        //2 is last piece of pagination
        return $val[2];
    }
}
