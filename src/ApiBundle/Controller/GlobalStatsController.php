<?php

namespace ApiBundle\Controller;

use ApiBundle\Services\SteamQueryService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalStatsController extends Controller
{
    /**
     * @Route("/globalstats/{appId}/")
     * @param integer $appId
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function GlobalStatsAction($appId, Request $request)
    {
        $jsonResponse = new JsonResponse();

        /** @var SteamQueryService $steamQueryService */
        $steamQueryService = $this->get('steam_query_service');

        //grab stat names
        $statNames = array();
        for ($i = 0; $i > -1; $i++) {
            if ($request->get("name$i")) {
                $statNames[] = $request->get("name$i");
            } else {
                break;
            }
        }

        //add appid to params
        $params = array(
            SteamQueryService::APP_ID => $appId,
            SteamQueryService::COUNT => count($statNames),
        );
        //addstatnames to params
        $i = 0;
        foreach ($statNames as $statName) {
            $name = SteamQueryService::NAME."[".$i."]";
            $params["$name"] = $statName;
            $i++;
        }

        $dataArray = $steamQueryService->querySteam(SteamQueryService::GET_GLOBAL_STATS_FOR_GAME, $params);

        $jsonResponse->setData($dataArray);
        $jsonResponse->setStatusCode(Response::HTTP_OK);
        $jsonResponse->setEncodingOptions( $jsonResponse->getEncodingOptions() | JSON_PRETTY_PRINT );

        return $jsonResponse;
    }
}
