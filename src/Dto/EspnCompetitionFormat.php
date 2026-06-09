<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnCompetitionFormat
{
    private ?EspnCompetitionFormatPeriod $regulation = null;
    private ?EspnCompetitionFormatPeriod $overtime = null;
    private ?EspnCompetitionFormatPeriod $suddenDeath = null;

    public function getRegulation(): ?EspnCompetitionFormatPeriod
    {
        return $this->regulation;
    }

    public function setRegulation(?EspnCompetitionFormatPeriod $regulation): static
    {
        $this->regulation = $regulation;
        return $this;
    }

    public function getOvertime(): ?EspnCompetitionFormatPeriod
    {
        return $this->overtime;
    }

    public function setOvertime(?EspnCompetitionFormatPeriod $overtime): static
    {
        $this->overtime = $overtime;
        return $this;
    }

    public function getSuddenDeath(): ?EspnCompetitionFormatPeriod
    {
        return $this->suddenDeath;
    }

    public function setSuddenDeath(?EspnCompetitionFormatPeriod $suddenDeath): static
    {
        $this->suddenDeath = $suddenDeath;
        return $this;
    }
}
