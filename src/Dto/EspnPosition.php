<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnPosition
{
    private ?string $id = null;
    private ?string $name = null;
    private ?string $displayName = null;
    private ?string $abbreviation = null;
    private ?bool $leaf = null;
    private ?string $parentReference = null;

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

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(?string $abbreviation): static
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function getLeaf(): ?bool
    {
        return $this->leaf;
    }

    public function setLeaf(?bool $leaf): static
    {
        $this->leaf = $leaf;
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
}
