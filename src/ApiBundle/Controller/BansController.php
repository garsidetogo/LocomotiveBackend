<?php

namespace ApiBundle\Controller;

use ApiBundle\Services\SteamQueryService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BansController extends Controller
{
    /**
     * @Route("/bans/")
     *
     * @ApiDoc(
     *     description="Retrieve player bans."
     * )
     *
     * @return JsonResponse
     */
    public function bansAction()
    {
        $jsonResponse = new JsonResponse();

        /** @var SteamQueryService $steamQueryService */
        $steamQueryService = $this->get('steam_query_service');

        $steamId = $this->getParameter('mock_steam_id');

        $params = array(
            SteamQueryService::STEAM_ID => $steamId,
        );

        $dataArray = $steamQueryService->querySteam(SteamQueryService::GET_PLAYER_BANS, $params);
        if ($dataArray == null) {
            $dataArray = array("display_text" => "You have no active bans.");
        }

        $jsonResponse->setData($dataArray);
        $jsonResponse->setStatusCode(Response::HTTP_OK);
        $jsonResponse->setEncodingOptions( $jsonResponse->getEncodingOptions() | JSON_PRETTY_PRINT );

        return $jsonResponse;
    }
}
