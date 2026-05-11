<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use Symfony\Component\Serializer\Attribute\Context;

final class EspnSeasonTypeTeamRecord
{
    private ?string $id = null;
    private ?string $name = null;
    private ?string $abbreviation = null;
    private ?string $type = null;
    private ?string $summary = null;
    private ?string $displayValue = null;
    #[Context([
        'disable_type_enforcement' => true
    ])]
    private ?string $value = null;

    /**
     * @var EspnSeasonTypeTeamRecordStat[]
     */
    private array $stats = [];

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

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(?string $abbreviation): static
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): static
    {
        $this->summary = $summary;
        return $this;
    }

    public function getDisplayValue(): ?string
    {
        return $this->displayValue;
    }

    public function setDisplayValue(?string $displayValue): static
    {
        $this->displayValue = $displayValue;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): static
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return EspnSeasonTypeTeamRecordStat[]
     */
    public function getStats(): array
    {
        return $this->stats;
    }

    /**
     * @param EspnSeasonTypeTeamRecordStat[] $stats
     * @return $this
     */
    public function setStats(array $stats): static
    {
        $this->stats = $stats;
        return $this;
    }
}
