<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnBroadcastMedia
{
    private string $shortName;

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): EspnBroadcastMedia
    {
        $this->shortName = $shortName;
        return $this;
    }
}
