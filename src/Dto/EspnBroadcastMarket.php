<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnBroadcastMarket
{
    private string $id;
    private string $type;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): EspnBroadcastMarket
    {
        $this->id = $id;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): EspnBroadcastMarket
    {
        $this->type = $type;
        return $this;
    }
}
