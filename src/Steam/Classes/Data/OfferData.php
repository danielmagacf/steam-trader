<?php

namespace Danielmagacf\SteamTrade\Steam\Classes\Data;

class OfferData
{
    public function __construct(
        public readonly array $itemsFromMe,
        public readonly array $itemsFromThem,
        public readonly string $partnerSteamId,
        public readonly string $accessToken = '',
        public readonly ?string $counteredTradeOffer = '',
        public readonly string $message = '',
    )
    {

    }

}