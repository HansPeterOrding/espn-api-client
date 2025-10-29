<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnVenueAddress
{
    private ?string $city = null;
    private ?string $state = null;
    private ?string $zipCode = null;
    private ?string $country = null;

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): EspnVenueAddress
    {
        $this->city = $city;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): EspnVenueAddress
    {
        $this->state = $state;
        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): EspnVenueAddress
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): EspnVenueAddress
    {
        $this->country = $country;
        return $this;
    }
}
