<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use DateTime;

final class EspnWeek
{
    private int $number;
    private string $text;
    private DateTime $startDate;
    private DateTime $endDate;

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

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }
}
