<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnSeason
{
    private ?int $year = null;
    private ?string $startDate = null;
    private ?string $endDate = null;
    private ?string $displayName = null;
    private ?string $typeReference = null;
    private ?string $typesReference = null;
    private ?string $rankingsReference = null;
    private ?string $coachesReference = null;
    private ?string $athletesReference = null;
    private ?string $awardsReference = null;
    private ?string $futuresReference = null;
    private ?string $leadersReference = null;

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): static
    {
        $this->year = $year;
        return $this;
    }

    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    public function setStartDate(?string $startDate): static
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    public function setEndDate(?string $endDate): static
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): static
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getTypeReference(): ?string
    {
        return $this->typeReference;
    }

    public function setTypeReference(?string $typeReference): static
    {
        $this->typeReference = $typeReference;
        return $this;
    }

    public function getTypesReference(): ?string
    {
        return $this->typesReference;
    }

    public function setTypesReference(?string $typesReference): static
    {
        $this->typesReference = $typesReference;
        return $this;
    }

    public function getRankingsReference(): ?string
    {
        return $this->rankingsReference;
    }

    public function setRankingsReference(?string $rankingsReference): static
    {
        $this->rankingsReference = $rankingsReference;
        return $this;
    }

    public function getCoachesReference(): ?string
    {
        return $this->coachesReference;
    }

    public function setCoachesReference(?string $coachesReference): static
    {
        $this->coachesReference = $coachesReference;
        return $this;
    }

    public function getAthletesReference(): ?string
    {
        return $this->athletesReference;
    }

    public function setAthletesReference(?string $athletesReference): static
    {
        $this->athletesReference = $athletesReference;
        return $this;
    }

    public function getAwardsReference(): ?string
    {
        return $this->awardsReference;
    }

    public function setAwardsReference(?string $awardsReference): static
    {
        $this->awardsReference = $awardsReference;
        return $this;
    }

    public function getFuturesReference(): ?string
    {
        return $this->futuresReference;
    }

    public function setFuturesReference(?string $futuresReference): static
    {
        $this->futuresReference = $futuresReference;
        return $this;
    }

    public function getLeadersReference(): ?string
    {
        return $this->leadersReference;
    }

    public function setLeadersReference(?string $leadersReference): static
    {
        $this->leadersReference = $leadersReference;
        return $this;
    }
}
