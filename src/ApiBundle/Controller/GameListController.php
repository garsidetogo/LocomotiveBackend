<?php

namespace ApiBundle\Controller;

use ApiBundle\Services\SteamQueryService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

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

        /** @var SteamQueryService $steamQueryService */
        $steamQueryService = $this->get('steam_query_service');

        $dataArray = $steamQueryService->querySteam();

        $jsonResponse->setData($dataArray);
        $jsonResponse->setStatusCode(Response::HTTP_OK);

        return $jsonResponse->send();
        //return $this->render('ApiBundle:Default:index.html.twig');
    }
}
