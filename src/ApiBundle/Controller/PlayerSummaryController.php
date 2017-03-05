<?php

namespace ApiBundle\Controller;

use ApiBundle\Services\SteamQueryService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PlayerSummaryController extends Controller
{
    /**
     * @Route("/playersummary/")
     *
     * @ApiDoc(
     *     description="Retrieve player summary."
     * )
     *
     * @return JsonResponse
     */
    public function playerSummaryAction()
    {
        $jsonResponse = new JsonResponse();

        /** @var SteamQueryService $steamQueryService */
        $steamQueryService = $this->get('steam_query_service');

        $steamId = $this->getParameter('mock_steam_id');

        $params = array(
            SteamQueryService::STEAM_IDS => $steamId,
        );

        $dataArray = $steamQueryService->querySteam(SteamQueryService::GET_PLAYER_SUMMARIES, $params);
        if ($dataArray == null) {
            $dataArray = array("display_text" => "You have no active account.");
        }

        $jsonResponse->setData($dataArray);
        $jsonResponse->setStatusCode(Response::HTTP_OK);
        $jsonResponse->setEncodingOptions( $jsonResponse->getEncodingOptions() | JSON_PRETTY_PRINT );

        return $jsonResponse;
    }
}
