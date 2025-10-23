<?php

declare(strict_types = 1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnBroadcastType
{
    private string $id;
    private string $shortNme;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): EspnBroadcastType
    {
        $this->id = $id;
        return $this;
    }

    public function getShortNme(): string
    {
        return $this->shortNme;
    }

    public function setShortNme(string $shortNme): EspnBroadcastType
    {
        $this->shortNme = $shortNme;
        return $this;
    }
}
