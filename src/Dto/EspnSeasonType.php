<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnSeasonType
{
    private ?string $id = null;
    private ?int $type = null;
    private ?string $name = null;
    private ?string $abbreviation = null;
    private ?int $year = null;
    private ?string $startDate = null;
    private ?string $endDate = null;
    private ?bool $hasGroups = null;
    private ?bool $hasStandings = null;
    private ?bool $hasLegs = null;
    private ?string $slug = null;
    private ?string $groupsReference = null;
    private ?string $weeksReference = null;
    private ?string $correctionsReference = null;
    private ?string $leadersReference = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(?string $abbreviation): static
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

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

    public function getHasGroups(): ?bool
    {
        return $this->hasGroups;
    }

    public function setHasGroups(?bool $hasGroups): static
    {
        $this->hasGroups = $hasGroups;
        return $this;
    }

    public function getHasStandings(): ?bool
    {
        return $this->hasStandings;
    }

    public function setHasStandings(?bool $hasStandings): static
    {
        $this->hasStandings = $hasStandings;
        return $this;
    }

    public function getHasLegs(): ?bool
    {
        return $this->hasLegs;
    }

    public function setHasLegs(?bool $hasLegs): static
    {
        $this->hasLegs = $hasLegs;
        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): static
    {
        $this->slug = $slug;
        return $this;
    }

    public function getGroupsReference(): ?string
    {
        return $this->groupsReference;
    }

    public function setGroupsReference(?string $groupsReference): static
    {
        $this->groupsReference = $groupsReference;
        return $this;
    }

    public function getWeeksReference(): ?string
    {
        return $this->weeksReference;
    }

    public function setWeeksReference(?string $weeksReference): static
    {
        $this->weeksReference = $weeksReference;
        return $this;
    }

    public function getCorrectionsReference(): ?string
    {
        return $this->correctionsReference;
    }

    public function setCorrectionsReference(?string $correctionsReference): static
    {
        $this->correctionsReference = $correctionsReference;
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
