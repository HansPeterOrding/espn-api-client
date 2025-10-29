<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnCompetitorScore
{
    private float $value;
    private string $displayValue;

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): EspnCompetitorScore
    {
        $this->value = $value;
        return $this;
    }

    public function getDisplayValue(): string
    {
        return $this->displayValue;
    }

    public function setDisplayValue(string $displayValue): EspnCompetitorScore
    {
        $this->displayValue = $displayValue;
        return $this;
    }
}
