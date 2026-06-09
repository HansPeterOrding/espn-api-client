<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnStanding
{
    private ?string $id = null;
    private ?string $name = null;
    private ?string $displayName = null;

    /**
     * @var EspnStandingEntry[]
     */
    private array $standings = [];

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;
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

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): static
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getStandings(): array
    {
        return $this->standings;
    }

    public function setStandings(array $standings): static
    {
        $this->standings = $standings;
        return $this;
    }
}
