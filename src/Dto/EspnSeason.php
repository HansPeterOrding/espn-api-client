<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use DateTime;

final class EspnSeason
{
    private ?int $year = null;
    private ?DateTime $startDate = null;
    private ?DateTime $endDate = null;
    private ?string $displayName = null;
    private ?string $typeReference = null;
    private ?string $typesReference = null;
    private ?string $rankingsReference = null;
    private ?string $futuresReference = null;

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): EspnSeason
    {
        $this->year = $year;
        return $this;
    }

    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(?DateTime $startDate): EspnSeason
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?DateTime $endDate): EspnSeason
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): EspnSeason
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getTypeReference(): ?string
    {
        return $this->typeReference;
    }

    public function setTypeReference(?string $typeReference): EspnSeason
    {
        $this->typeReference = $typeReference;
        return $this;
    }

    public function getTypesReference(): ?string
    {
        return $this->typesReference;
    }

    public function setTypesReference(?string $typesReference): EspnSeason
    {
        $this->typesReference = $typesReference;
        return $this;
    }

    public function getRankingsReference(): ?string
    {
        return $this->rankingsReference;
    }

    public function setRankingsReference(?string $rankingsReference): EspnSeason
    {
        $this->rankingsReference = $rankingsReference;
        return $this;
    }

    public function getFuturesReference(): ?string
    {
        return $this->futuresReference;
    }

    public function setFuturesReference(?string $futuresReference): EspnSeason
    {
        $this->futuresReference = $futuresReference;
        return $this;
    }
}
