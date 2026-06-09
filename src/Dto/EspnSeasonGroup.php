<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnSeasonGroup
{
    private ?string $id = null;
    private ?string $uid = null;
    private ?string $name = null;
    private ?string $abbreviation = null;
    private ?string $slug = null;
    private ?bool $isConference = null;
    private ?string $seasonReference = null;
    private ?string $parentReference = null;
    private ?string $childrenReference = null;
    private ?string $standingsReference = null;
    private ?string $teamsReference = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(?string $uid): static
    {
        $this->uid = $uid;
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): static
    {
        $this->slug = $slug;
        return $this;
    }

    public function getIsConference(): ?bool
    {
        return $this->isConference;
    }

    public function setIsConference(?bool $isConference): static
    {
        $this->isConference = $isConference;
        return $this;
    }

    public function getSeasonReference(): ?string
    {
        return $this->seasonReference;
    }

    public function setSeasonReference(?string $seasonReference): static
    {
        $this->seasonReference = $seasonReference;
        return $this;
    }

    public function getParentReference(): ?string
    {
        return $this->parentReference;
    }

    public function setParentReference(?string $parentReference): static
    {
        $this->parentReference = $parentReference;
        return $this;
    }

    public function getChildrenReference(): ?string
    {
        return $this->childrenReference;
    }

    public function setChildrenReference(?string $childrenReference): static
    {
        $this->childrenReference = $childrenReference;
        return $this;
    }

    public function getStandingsReference(): ?string
    {
        return $this->standingsReference;
    }

    public function setStandingsReference(?string $standingsReference): static
    {
        $this->standingsReference = $standingsReference;
        return $this;
    }

    public function getTeamsReference(): ?string
    {
        return $this->teamsReference;
    }

    public function setTeamsReference(?string $teamsReference): static
    {
        $this->teamsReference = $teamsReference;
        return $this;
    }
}
