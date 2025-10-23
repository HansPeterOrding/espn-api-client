<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnVenue
{
    private ?string $id = null;
    private ?string $guid = null;
    private string $fullName;
    private EspnVenueAddress $address;
    private ?bool $grass = null;
    private ?bool $indoor = null;

    /**
     * @var EspnImage[]
     */
    private array $images;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): EspnVenue
    {
        $this->id = $id;
        return $this;
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(?string $guid): EspnVenue
    {
        $this->guid = $guid;
        return $this;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): EspnVenue
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function getAddress(): EspnVenueAddress
    {
        return $this->address;
    }

    public function setAddress(EspnVenueAddress $address): EspnVenue
    {
        $this->address = $address;
        return $this;
    }

    public function getGrass(): ?bool
    {
        return $this->grass;
    }

    public function setGrass(?bool $grass): EspnVenue
    {
        $this->grass = $grass;
        return $this;
    }

    public function getIndoor(): ?bool
    {
        return $this->indoor;
    }

    public function setIndoor(?bool $indoor): EspnVenue
    {
        $this->indoor = $indoor;
        return $this;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images): EspnVenue
    {
        $this->images = $images;
        return $this;
    }
}
