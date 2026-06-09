<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

final class EspnCompetitionFormatPeriod
{
    private ?int $periods = null;
    private ?string $displayName = null;
    private ?string $slug = null;

    #[Context(denormalizationContext: [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true])]
    private ?string $clock = null;

    public function getPeriods(): ?int
    {
        return $this->periods;
    }

    public function setPeriods(?int $periods): static
    {
        $this->periods = $periods;
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): static
    {
        $this->slug = $slug;
        return $this;
    }

    public function getClock(): ?string
    {
        return $this->clock;
    }

    public function setClock(?string $clock): static
    {
        $this->clock = $clock;
        return $this;
    }
}
