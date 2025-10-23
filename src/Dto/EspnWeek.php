<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnWeek
{
    private int $number;
    private string $text;

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): EspnWeek
    {
        $this->number = $number;
        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): EspnWeek
    {
        $this->text = $text;
        return $this;
    }
}
