<?php

namespace EngineBundle\Command;

use Goutte\Client;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DomCrawler\Crawler;

class LocomotiveScratchCommand extends ContainerAwareCommand
{
    /** @var array $tags */
    private $tags;

    protected function configure()
    {
        $this
            ->setName('locomotive:scratch-command')
            ->setDescription('...')
            ->addArgument('appId', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $appId = $input->getArgument('appId');
        $queryUrl = "http://store.steampowered.com/app/$appId/";

        /** @var Client $client */
        $client = new Client();
        /** @var Crawler $crawler */
        $crawler = $client->request('GET', $queryUrl);
        /** @var $node */
        $crawler->filter('.popular_tags > a')->each(function($node) {
            $this->tags[] = trim($node->text());
        });

        print_r($this->tags);
    }

}
