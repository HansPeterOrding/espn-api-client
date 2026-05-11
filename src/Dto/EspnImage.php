<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use DateTime;

final class EspnImage
{
    private ?string $href = null;
    private ?int $width = null;
    private ?int $height = null;
    private ?string $alt = null;
    private array $rel = [];
    private ?DateTime $lastUpdated = null;

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHref(?string $href): static
    {
        $this->href = $href;
        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(?int $width): static
    {
        $this->width = $width;
        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): static
    {
        $this->height = $height;
        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(?string $alt): static
    {
        $this->alt = $alt;
        return $this;
    }

    public function getRel(): array
    {
        return $this->rel;
    }

    public function setRel(array $rel): static
    {
        $this->rel = $rel;
        return $this;
    }

    public function getLastUpdated(): ?DateTime
    {
        return $this->lastUpdated;
    }

    public function setLastUpdated(?DateTime $lastUpdated): static
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }
}
