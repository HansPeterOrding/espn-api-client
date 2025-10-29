<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnFranchise
{
    private ?string $id;
    private ?string $uid;
    private ?string $slug;
    private ?string $location;
    private ?string $name;
    private ?string $nickname;
    private ?string $abbreviation;
    private ?string $displayName;
    private ?string $shortDisplayName;
    private ?string $color;
    private ?bool $isActive;

    private EspnVenue $venue;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): EspnFranchise
    {
        $this->id = $id;
        return $this;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(?string $uid): EspnFranchise
    {
        $this->uid = $uid;
        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): EspnFranchise
    {
        $this->slug = $slug;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): EspnFranchise
    {
        $this->location = $location;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): EspnFranchise
    {
        $this->name = $name;
        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(?string $nickname): EspnFranchise
    {
        $this->nickname = $nickname;
        return $this;
    }

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(?string $abbreviation): EspnFranchise
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): EspnFranchise
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getShortDisplayName(): ?string
    {
        return $this->shortDisplayName;
    }

    public function setShortDisplayName(?string $shortDisplayName): EspnFranchise
    {
        $this->shortDisplayName = $shortDisplayName;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): EspnFranchise
    {
        $this->color = $color;
        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): EspnFranchise
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getVenue(): EspnVenue
    {
        return $this->venue;
    }

    public function setVenue(EspnVenue $venue): EspnFranchise
    {
        $this->venue = $venue;
        return $this;
    }
}
