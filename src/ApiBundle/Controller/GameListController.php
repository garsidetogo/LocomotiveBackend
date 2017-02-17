<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class GameListController extends Controller
{
    /**
     * @Route("/gamelist/{steamId}")
     * @param integer $steamId
     *
     * @return JsonResponse
     */
    public function indexAction($steamId)
    {
        $jsonResponse = new JsonResponse();

        $dataArray = array(
            "id" => $steamId,
        );

        $jsonResponse->setContent(json_encode($dataArray));

        //$jsonResponse->send();

        return $jsonResponse;
        //return $this->render('ApiBundle:Default:index.html.twig');
    }
}
