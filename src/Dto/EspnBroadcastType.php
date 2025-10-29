<?php

declare(strict_types = 1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnBroadcastType
{
    private string $id;
    private string $shortName;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): EspnBroadcastType
    {
        $this->id = $id;
        return $this;
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): EspnBroadcastType
    {
        $this->shortName = $shortName;
        return $this;
    }
}
