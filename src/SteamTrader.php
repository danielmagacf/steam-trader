<?php

namespace Danielmagacf\SteamTrade;

use Danielmagacf\SteamTrade\Steam\Classes\SteamTrade;

class SteamTrader
{
    /**
     * This package is a wrapper for steam
     *
     * @param string $sessionId
     * @param array $cookies
     * @param string $apiKey
     * @return SteamTrade
     */
    public static function get(string $sessionId, array $cookies, string $apiKey = ''): SteamTrade
    {
        $trade = new SteamTrade();
        $trade->setup($sessionId, $cookies, $apiKey);

        return  $trade;
    }
}