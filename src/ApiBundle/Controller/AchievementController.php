<?php

namespace ApiBundle\Controller;

use ApiBundle\Services\SteamQueryService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AchievementController extends Controller
{
    /**
     * @Route("/achievements/{appId}/")
     * @param integer $appId
     *
     * @ApiDoc(
     *     description="Retrieve user achievements for a game",
     *     requirements={
     *      {
     *          "name"="appId",
     *          "dataType"="integer",
     *          "requirement"="/{appId}/",
     *          "description"="AppId of the game in question."
     *      }
     *     }
     * )
     *
     * @return JsonResponse
     */
    public function achievementAction($appId)
    {
        $jsonResponse = new JsonResponse();

        /** @var SteamQueryService $steamQueryService */
        $steamQueryService = $this->get('steam_query_service');
        $steamId = $this->getParameter('mock_steam_id');
        $language = "en";

        $params = array(
            SteamQueryService::APP_ID => $appId,
            SteamQueryService::STEAM_ID => $steamId,
            SteamQueryService::LANGUAGE => $language,
        );

        $dataArray = $steamQueryService->querySteam(SteamQueryService::GET_PLAYER_ACHIEVEMENTS, $params);

        $jsonResponse->setData($dataArray);
        $jsonResponse->setStatusCode(Response::HTTP_OK);
        $jsonResponse->setEncodingOptions( $jsonResponse->getEncodingOptions() | JSON_PRETTY_PRINT );

        return $jsonResponse;
    }
}
