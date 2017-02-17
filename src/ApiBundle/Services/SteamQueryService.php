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

    /**
     * @param   string  $url
     * @param   array   $params
     * @return mixed
     */
    public function querySteam($url, $params)
    {
        $queryUrl = $this->createQueryUrl($url, $params);

        //basic curl settings
        $curlHandle = curl_init($queryUrl);
        curl_setopt($curlHandle, CURLOPT_CUSTOMREQUEST, "GET");
        //curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($curlHandle);
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
    }
}