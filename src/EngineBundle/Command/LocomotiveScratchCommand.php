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
        //$client = new Client();
        /** @var Crawler $crawler */
        //$crawler = $client->request('GET', $queryUrl);

        /*if ($crawler->getUri() == "http://store.steampowered.com/agecheck/app/$appId/") {
            echo "Automating Age Check...\n";
            $form = $crawler->filter('#agecheck_form')->form();
            $form['ageYear'] = 1900;

            $crawler = $client->submit($form);
        }*/

        /** @var $node */
        /*$crawler->filter('.popular_tags > a')->each(function($node) {
            $this->tags[] = trim($node->text());
        });*/

        //print_r($this->tags);

        /** @var DocumentManager $dm */
        $dm = $this->getContainer()->get('doctrine_mongodb')->getManager();

        /*$app = new App();
        $app->setAppId($appId);
        $app->setName("Temp");

        $dm->persist($app);
        $dm->flush();*/

        /** @var AppRepository $repo */
        $repo = $dm->getRepository("ModelBundle:App");
        /** @var ArrayCollection $docs */
        $docs = $repo->findAllOrderedByName();
        foreach ($docs as $doc) {
            print_r($doc);
        }
    }

}
