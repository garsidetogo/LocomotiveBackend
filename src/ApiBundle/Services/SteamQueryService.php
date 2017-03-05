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
    const GET_PLAYER_ACHIEVEMENTS = "http://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v0001/";
    const GET_USER_STATS_FOR_GAME = "http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?";
    const GET_SCHEMA_FOR_GAME = "http://api.steampowered.com/ISteamUserStats/GetSchemaForGame/v2/";
    const GET_NEWS_FOR_APP = "http://api.steampowered.com/ISteamNews/GetNewsForApp/v0002/";
    const GET_PLAYER_BANS = "http://api.steampowered.com/ISteamUser/GetPlayerBans/v1/";
    const GET_GLOBAL_ACHIEVEMENT_PERCENTAGES_FOR_APP = "http://api.steampowered.com/ISteamUserStats/GetGlobalAchievementPercentagesForApp/v0002/";
    const GET_GLOBAL_STATS_FOR_GAME = "http://api.steampowered.com/ISteamUserStats/GetGlobalStatsForGame/v0001/";

    const STEAM_ID = "steamid";
    const STEAM_IDS = "steamids";
    const APP_ID = "appid";
    const GAME_ID = "gameid";
    const LANGUAGE = "l";
    const INCLUDE_APPINFO = "include_appinfo";
    const COUNT = "count";
    const MAX_LENGTH = "maxlength";
    const NAME = "name";

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
        $resultUrl = $url."?key=".$this->apiKey;
        foreach ($params as $key => $val) {
            $resultUrl .= "&".$key."=".$val;
        }
        $resultUrl .= "&format=json";

        return $resultUrl;
    }
}