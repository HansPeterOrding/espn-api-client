<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use DateTime;

final class EspnSeasonType
{
    private ?string $id = null;
    private ?int $type = null;
    private ?string $name = null;
    private ?string $abbreviation = null;
    private ?int $year = null;
    private ?DateTime $startDate = null;
    private ?DateTime $endDate = null;
    private ?bool $hasGroups = null;
    private ?bool $hasStandings = null;
    private ?bool $hasLegs = null;
    private ?string $groupsReference = null;
    private ?string $weeksReference = null;
    private ?string $correctionsReference = null;
    private ?string $slug = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): EspnSeasonType
    {
        $this->id = $id;
        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): EspnSeasonType
    {
        $this->type = $type;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): EspnSeasonType
    {
        $this->name = $name;
        return $this;
    }

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(?string $abbreviation): EspnSeasonType
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): EspnSeasonType
    {
        $this->year = $year;
        return $this;
    }

    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(?DateTime $startDate): EspnSeasonType
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?DateTime $endDate): EspnSeasonType
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getHasGroups(): ?bool
    {
        return $this->hasGroups;
    }

    public function setHasGroups(?bool $hasGroups): EspnSeasonType
    {
        $this->hasGroups = $hasGroups;
        return $this;
    }

    public function getHasStandings(): ?bool
    {
        return $this->hasStandings;
    }

    public function setHasStandings(?bool $hasStandings): EspnSeasonType
    {
        $this->hasStandings = $hasStandings;
        return $this;
    }

    public function getHasLegs(): ?bool
    {
        return $this->hasLegs;
    }

    public function setHasLegs(?bool $hasLegs): EspnSeasonType
    {
        $this->hasLegs = $hasLegs;
        return $this;
    }

    public function getGroupsReference(): ?string
    {
        return $this->groupsReference;
    }

    public function setGroupsReference(?string $groupsReference): EspnSeasonType
    {
        $this->groupsReference = $groupsReference;
        return $this;
    }

    public function getWeeksReference(): ?string
    {
        return $this->weeksReference;
    }

    public function setWeeksReference(?string $weeksReference): EspnSeasonType
    {
        $this->weeksReference = $weeksReference;
        return $this;
    }

    public function getCorrectionsReference(): ?string
    {
        return $this->correctionsReference;
    }

    public function setCorrectionsReference(?string $correctionsReference): EspnSeasonType
    {
        $this->correctionsReference = $correctionsReference;
        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): EspnSeasonType
    {
        $this->slug = $slug;
        return $this;
    }
}
