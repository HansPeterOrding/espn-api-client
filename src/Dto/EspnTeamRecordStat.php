<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnTeamRecordStat
{
    private string $name;
    private float $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): EspnTeamRecordStat
    {
        $this->name = $name;
        return $this;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): EspnTeamRecordStat
    {
        $this->value = $value;
        return $this;
    }
}
