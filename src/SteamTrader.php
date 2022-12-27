<?php

namespace Daniel\SteamTrade;

use SteamTrade;

require_once('php-steam-tradeoffers/classes/steam.class.php');

class SteamTrader
{
    /**
     * This package is a wrapper for steam
     *
     * @param string $sessionId
     * @param array $cookies
     * @return SteamTrade
     */
    public static function get(string $sessionId, array $cookies): SteamTrade
    {
        $trade = new SteamTrade();
        $trade->setup($sessionId, $cookies);

        return  $trade;
    }
}