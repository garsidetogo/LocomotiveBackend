<?php

namespace ApiBundle\Controller;

use ApiBundle\Services\SteamQueryService;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
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
     * @ApiDoc(
     *     description="Retrieve latest news for a game.",
     *     requirements={
     *      {
     *          "name"="appId",
     *          "dataType"="integer",
     *          "requirement"="/{appId}/",
     *          "description"="AppId of the game in question."
     *      },
     *      {
     *          "name"="count",
     *          "dataType"="integer",
     *          "requirement"="?count=",
     *          "description"="Count of articles to return."
     *      },
     *      {
     *          "name"="maxlength",
     *          "dataType"="integer",
     *          "requirement"="?maxlength=",
     *          "description"="Length of article description to return."
     *      },
     *     }
     * )
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
}
