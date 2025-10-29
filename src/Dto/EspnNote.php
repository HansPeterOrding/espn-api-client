<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnNote
{
    private string $type;
    private string $headline;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): EspnNote
    {
        $this->type = $type;
        return $this;
    }

    public function getHeadline(): string
    {
        return $this->headline;
    }

    public function setHeadline(string $headline): EspnNote
    {
        $this->headline = $headline;
        return $this;
    }
}
