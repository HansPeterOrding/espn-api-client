<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnCompetitionStatus
{
    private float $clock;
    private string $displayClock;
    private int $period;
    private EspnCompetitionStatusType $type;
    private bool $isTBDFlex;

    public function getClock(): float
    {
        return $this->clock;
    }

    public function setClock(float $clock): EspnCompetitionStatus
    {
        $this->clock = $clock;
        return $this;
    }

    public function getDisplayClock(): string
    {
        return $this->displayClock;
    }

    public function setDisplayClock(string $displayClock): EspnCompetitionStatus
    {
        $this->displayClock = $displayClock;
        return $this;
    }

    public function getPeriod(): int
    {
        return $this->period;
    }

    public function setPeriod(int $period): EspnCompetitionStatus
    {
        $this->period = $period;
        return $this;
    }

    public function getType(): EspnCompetitionStatusType
    {
        return $this->type;
    }

    public function setType(EspnCompetitionStatusType $type): EspnCompetitionStatus
    {
        $this->type = $type;
        return $this;
    }

    public function isTBDFlex(): bool
    {
        return $this->isTBDFlex;
    }

    public function setIsTBDFlex(bool $isTBDFlex): EspnCompetitionStatus
    {
        $this->isTBDFlex = $isTBDFlex;
        return $this;
    }
}
