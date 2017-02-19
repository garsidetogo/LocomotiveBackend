<?php

namespace ApiBundle\Services;

/**
 * Class SteamQueryService
 * @package ApiBundle\Services
 */
class SteamQueryService
{
    //reference https://developer.valvesoftware.com/wiki/Steam_Web_API
    const GET_PLAYER_SUMMARIES = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/";
    const GET_OWNED_GAMES = "http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/";
    const GET_GLOBAL_ACHIEVEMENT_PERCENTAGES_FOR_APP = "http://api.steampowered.com/ISteamNews/GetNewsForApp/v0002/";

    const STEAM_ID = "steamid";
    const INCLUDE_APPINFO = "include_appinfo";

    /** @var string @apiKey */
    private $apiKey;

    /**
     * SteamQueryService constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param   string  $url
     * @param   array   $params
     * @return mixed
     */
    public function querySteam($url, $params)
    {
        //get query url
        $queryUrl = $this->createQueryUrl($url, $params);

        //basic curl settings
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $queryUrl);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_PROXY, '');

        //execute query
        $result = curl_exec($curlHandle);

        //close curl
        curl_close($curlHandle);

        //return result
        return json_decode($result, true);
    }

    /**
     * @param $url
     * @param $params
     *
     * @return string
     */
    private function createQueryUrl($url, $params) {
        //todo logic for applying params to url
        $resultUrl = $url."?key=".$this->apiKey;
        $i = 0;
        foreach ($params as $key => $val) {
            /*if ($i > 0) {
                $resultUrl .= "&".$key."=".$val;
            } else {
                $resultUrl .= "?".$key."=".$val;
            }*/

            $resultUrl .= "&".$key."=".$val;
        }
        $resultUrl .= "&format=json";

        return $resultUrl;
    }
}