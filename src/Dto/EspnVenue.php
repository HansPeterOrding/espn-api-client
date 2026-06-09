<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnVenue
{
    private ?string $id = null;
    private ?string $guid = null;
    private ?string $fullName = null;
    private ?EspnAddress $address = null;
    private ?bool $grass = null;
    private ?bool $indoor = null;

    /**
     * @var EspnImage[]
     */
    private array $images = [];

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(?string $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): static
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function getAddress(): ?EspnAddress
    {
        return $this->address;
    }

    public function setAddress(?EspnAddress $address): static
    {
        $this->address = $address;
        return $this;
    }

    public function getGrass(): ?bool
    {
        return $this->grass;
    }

    public function setGrass(?bool $grass): static
    {
        $this->grass = $grass;
        return $this;
    }

    public function getIndoor(): ?bool
    {
        return $this->indoor;
    }

    public function setIndoor(?bool $indoor): static
    {
        $this->indoor = $indoor;
        return $this;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images): static
    {
        $this->images = $images;
        return $this;
    }
}
