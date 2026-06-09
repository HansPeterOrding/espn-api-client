<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnEvent
{
    private ?string $id = null;
    private ?string $uid = null;
    private ?string $date = null;
    private ?string $name = null;
    private ?string $shortName = null;
    private ?bool $timeValid = null;
    private ?string $seasonReference = null;
    private ?string $seasonTypeReference = null;
    private ?string $weekReference = null;
    private ?string $leagueReference = null;

    /**
     * @var EspnLink[]
     */
    private array $links = [];

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

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): static
    {
        $this->date = $date;
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

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function setShortName(?string $shortName): static
    {
        $this->shortName = $shortName;
        return $this;
    }

    public function getTimeValid(): ?bool
    {
        return $this->timeValid;
    }

    public function setTimeValid(?bool $timeValid): static
    {
        $this->timeValid = $timeValid;
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

    public function getSeasonTypeReference(): ?string
    {
        return $this->seasonTypeReference;
    }

    public function setSeasonTypeReference(?string $seasonTypeReference): static
    {
        $this->seasonTypeReference = $seasonTypeReference;
        return $this;
    }

    public function getWeekReference(): ?string
    {
        return $this->weekReference;
    }

    public function setWeekReference(?string $weekReference): static
    {
        $this->weekReference = $weekReference;
        return $this;
    }

    public function getLeagueReference(): ?string
    {
        return $this->leagueReference;
    }

    public function setLeagueReference(?string $leagueReference): static
    {
        $this->leagueReference = $leagueReference;
        return $this;
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function setLinks(array $links): static
    {
        $this->links = $links;
        return $this;
    }
}
