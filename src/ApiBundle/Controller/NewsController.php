<?php

namespace ApiBundle\Controller;

use ApiBundle\Services\SteamQueryService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * @Route("/news/{appId}/")
     * @param integer $appId
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function newsAction($appId, Request $request)
    {
        //deafaults overwritten by request if present
        $request->get("count") ? $count = $request->get("count") : $count = 3;
        $request->get("maxlength") ? $maxLength = $request->get("maxlength") : $maxLength = 1000;

        $jsonResponse = new JsonResponse();

        /** @var SteamQueryService $steamQueryService */
        $steamQueryService = $this->get('steam_query_service');

        $params = array(
            SteamQueryService::APP_ID => $appId,
            SteamQueryService::COUNT => $count,
            SteamQueryService::MAX_LENGTH => $maxLength,
        );

        $dataArray = $steamQueryService->querySteam(SteamQueryService::GET_NEWS_FOR_APP, $params);

        $jsonResponse->setData($dataArray);
        $jsonResponse->setStatusCode(Response::HTTP_OK);
        $jsonResponse->setEncodingOptions( $jsonResponse->getEncodingOptions() | JSON_PRETTY_PRINT );

        return $jsonResponse;
    }

    /**
     * @Route("/gamelist/unplayed/{steamId}")
     * @param integer $steamId
     *
     * @return JsonResponse
     */
    public function gameListUnplayedGamesAction($steamId)
    {
        $jsonResponse = new JsonResponse();

        /** @var SteamQueryService $steamQueryService */
        $steamQueryService = $this->get('steam_query_service');

        $params = array(SteamQueryService::STEAM_ID => $steamId);
        $dataArray = $steamQueryService->querySteam(SteamQueryService::GET_OWNED_GAMES, $params);

        //filter to only unplayed games
        $games = $dataArray["response"]["games"];
        $unplayed = array();
        foreach ($games as $game) {
            if ($game["playtime_forever"] == 0) {
                $unplayed[] = $game;
            }
        }
        $dataArray["response"]["games"] = $unplayed;

        $jsonResponse->setData($dataArray);
        $jsonResponse->setStatusCode(Response::HTTP_OK);
        $jsonResponse->setEncodingOptions( $jsonResponse->getEncodingOptions() | JSON_PRETTY_PRINT );

        return $jsonResponse;
    }
}
