<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

final class EspnCompetitionStatus
{
    #[Context(denormalizationContext: [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true])]
    private ?string $clock = null;
    private ?string $displayClock = null;
    private ?int $period = null;
    private ?EspnCompetitionStatusType $type = null;

    public function getClock(): ?string
    {
        return $this->clock;
    }

    public function setClock(?string $clock): static
    {
        $this->clock = $clock;
        return $this;
    }

    public function getDisplayClock(): ?string
    {
        return $this->displayClock;
    }

    public function setDisplayClock(?string $displayClock): static
    {
        $this->displayClock = $displayClock;
        return $this;
    }

    public function getPeriod(): ?int
    {
        return $this->period;
    }

    public function setPeriod(?int $period): static
    {
        $this->period = $period;
        return $this;
    }

    public function getType(): ?EspnCompetitionStatusType
    {
        return $this->type;
    }

    public function setType(?EspnCompetitionStatusType $type): static
    {
        $this->type = $type;
        return $this;
    }
}
