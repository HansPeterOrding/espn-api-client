<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnTeam
{
    public function __construct()
    {
    }

    private string $id;
    private string $uid;
    private string $slug;
    private string $location;
    private string $name;
    private string $displayName;
    private string $shortDisplayName;
    private string $abbreviation;
    private ?string $nickname = null;
    private ?string $alternateId = null;

    /**
     * @var EspnImage[]
     */
    private array $logos;

    private ?EspnTeamRecord $record = null;

    private ?EspnFranchise $franchise = null;

    private ?string $standingSummary = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): EspnTeam
    {
        $this->id = $id;
        return $this;
    }

    public function getUid(): string
    {
        return $this->uid;
    }

    public function setUid(string $uid): EspnTeam
    {
        $this->uid = $uid;
        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): EspnTeam
    {
        $this->slug = $slug;
        return $this;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): EspnTeam
    {
        $this->location = $location;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): EspnTeam
    {
        $this->name = $name;
        return $this;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): EspnTeam
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getShortDisplayName(): string
    {
        return $this->shortDisplayName;
    }

    public function setShortDisplayName(string $shortDisplayName): EspnTeam
    {
        $this->shortDisplayName = $shortDisplayName;
        return $this;
    }

    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(string $abbreviation): EspnTeam
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(?string $nickname): EspnTeam
    {
        $this->nickname = $nickname;
        return $this;
    }

    public function getAlternateId(): ?string
    {
        return $this->alternateId;
    }

    public function setAlternateId(?string $alternateId): EspnTeam
    {
        $this->alternateId = $alternateId;
        return $this;
    }

    public function getLogos(): array
    {
        return $this->logos;
    }

    public function setLogos(array $logos): EspnTeam
    {
        $this->logos = $logos;
        return $this;
    }

    public function getRecord(): ?EspnTeamRecord
    {
        return $this->record;
    }

    public function setRecord(?EspnTeamRecord $record): EspnTeam
    {
        $this->record = $record;
        return $this;
    }

    public function getFranchise(): ?EspnFranchise
    {
        return $this->franchise;
    }

    public function setFranchise(?EspnFranchise $franchise): EspnTeam
    {
        $this->franchise = $franchise;
        return $this;
    }

    public function getStandingSummary(): ?string
    {
        return $this->standingSummary;
    }

    public function setStandingSummary(?string $standingSummary): EspnTeam
    {
        $this->standingSummary = $standingSummary;
        return $this;
    }
}
