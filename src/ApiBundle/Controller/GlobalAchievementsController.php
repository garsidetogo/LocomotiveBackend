<?php

namespace ApiBundle\Controller;

use ApiBundle\Services\SteamQueryService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GlobalAchievementsController extends Controller
{
    /**
     * @Route("/globalachievements/{appId}/")
     * @param integer $appId
     *
     * @ApiDoc(
     *     description="Retrieve global achievements stats for a game.",
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
    public function GlobalAchievementsAction($appId)
    {
        $jsonResponse = new JsonResponse();

        /** @var SteamQueryService $steamQueryService */
        $steamQueryService = $this->get('steam_query_service');

        $params = array(
            SteamQueryService::GAME_ID => $appId,
        );

        $dataArray = $steamQueryService->querySteam(SteamQueryService::GET_GLOBAL_ACHIEVEMENT_PERCENTAGES_FOR_APP, $params);

        $jsonResponse->setData($dataArray);
        $jsonResponse->setStatusCode(Response::HTTP_OK);
        $jsonResponse->setEncodingOptions( $jsonResponse->getEncodingOptions() | JSON_PRETTY_PRINT );

        return $jsonResponse;
    }
}
