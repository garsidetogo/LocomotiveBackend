<?php

namespace EngineBundle\Command;

use Goutte\Client;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Class LocomotivePullNewestGamesCommand
 * @package EngineBundle\Command
 */
class LocomotivePullNewestGamesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('locomotive:pull-newest-games')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');

        if ($input->getOption('option')) {
            // ...
        }


        $newReleasesUrl = "http://store.steampowered.com/search/?sort_by=Released_DESC&category1=998&os=win";
        /** @var Client $client */
        $client = new Client();
        /** @var Crawler $crawler */
        $crawler = $client->request('GET', $newReleasesUrl);


        $crawler->filter('#search_result_container > div > a')->each(function (Crawler $node) {
            /** @var Crawler $temp */
            $attributes = $node->extract(array("_text", "href"));
            foreach ($attributes as $attribute) {
                if (count($attribute) > 1) {
                    $matches = array();
                    $success = preg_match('#/\d{1,}/#', $attribute[1], $matches);
                    if ($success) {
                        $appId = trim($matches[0], '/');
                        echo $appId."\n";
                    }
                }
            }
            //print_r($attributes);
            /*$temp = $node->extract(array("_text", "href"));
            echo $temp->text();*/
            //echo trim($node->text()."\n");
        });
    }
}
