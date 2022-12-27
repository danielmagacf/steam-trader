<?php

namespace Danielmagacf\SteamTrade;

use Danielmagacf\SteamTrade\Steam\Classes\SteamTrade;

class SteamTrader
{
    /**
     * This package is a wrapper for steam
     *
     * @param string $sessionId
     * @param string $cookies
     * @return SteamTrade
     */
    public static function get(string $sessionId, string $cookies): SteamTrade
    {
        $trade = new SteamTrade();
        $trade->setup($sessionId, $cookies);

        return  $trade;
    }
}