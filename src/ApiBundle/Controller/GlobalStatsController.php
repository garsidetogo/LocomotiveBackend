<?php

namespace ApiBundle\Controller;

use ApiBundle\Services\SteamQueryService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
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
     * @ApiDoc(
     *     description="Retrieve global stat aggregations for specific stats in a game.",
     *     requirements={
     *      {
     *          "name"="appId",
     *          "dataType"="integer",
     *          "requirement"="/{appId}/",
     *          "description"="AppId of the game in question."
     *      },
     *      {
     *          "name"="name0...n",
     *          "dataType"="string",
     *          "requirement"="?name0=",
     *          "description"="Name of the stat to be gathered and returned. Can pass multiple stats with increasing ints in the 'name' keys."
     *      }
     *     }
     * )
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
