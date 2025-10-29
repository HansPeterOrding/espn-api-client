<?php

declare(strict_types = 1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnBroadcast
{
    private EspnBroadcastType $type;
    private EspnBroadcastMarket $market;
    private EspnBroadcastMedia $media;
    private string $lang;
    private string $region;
    private bool $partnered;

    public function getType(): EspnBroadcastType
    {
        return $this->type;
    }

    public function setType(EspnBroadcastType $type): EspnBroadcast
    {
        $this->type = $type;
        return $this;
    }

    public function getMarket(): EspnBroadcastMarket
    {
        return $this->market;
    }

    public function setMarket(EspnBroadcastMarket $market): EspnBroadcast
    {
        $this->market = $market;
        return $this;
    }

    public function getMedia(): EspnBroadcastMedia
    {
        return $this->media;
    }

    public function setMedia(EspnBroadcastMedia $media): EspnBroadcast
    {
        $this->media = $media;
        return $this;
    }

    public function getLang(): string
    {
        return $this->lang;
    }

    public function setLang(string $lang): EspnBroadcast
    {
        $this->lang = $lang;
        return $this;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): EspnBroadcast
    {
        $this->region = $region;
        return $this;
    }

    public function isPartnered(): bool
    {
        return $this->partnered;
    }

    public function setPartnered(bool $partnered): EspnBroadcast
    {
        $this->partnered = $partnered;
        return $this;
    }
}
