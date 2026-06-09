<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

final class EspnContract
{
    private ?string $id = null;

    #[Context(denormalizationContext: [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true])]
    private ?string $optionType = null;

    #[Context(denormalizationContext: [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true])]
    private ?string $salary = null;

    #[Context(denormalizationContext: [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true])]
    private ?string $bonus = null;

    #[Context(denormalizationContext: [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true])]
    private ?string $salaryRemaining = null;

    private ?int $yearsRemaining = null;
    private ?int $signedThrough = null;
    private ?bool $active = null;
    private ?string $seasonReference = null;
    private ?string $teamReference = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getOptionType(): ?string
    {
        return $this->optionType;
    }

    public function setOptionType(?string $optionType): static
    {
        $this->optionType = $optionType;
        return $this;
    }

    public function getSalary(): ?string
    {
        return $this->salary;
    }

    public function setSalary(?string $salary): static
    {
        $this->salary = $salary;
        return $this;
    }

    public function getBonus(): ?string
    {
        return $this->bonus;
    }

    public function setBonus(?string $bonus): static
    {
        $this->bonus = $bonus;
        return $this;
    }

    public function getSalaryRemaining(): ?string
    {
        return $this->salaryRemaining;
    }

    public function setSalaryRemaining(?string $salaryRemaining): static
    {
        $this->salaryRemaining = $salaryRemaining;
        return $this;
    }

    public function getYearsRemaining(): ?int
    {
        return $this->yearsRemaining;
    }

    public function setYearsRemaining(?int $yearsRemaining): static
    {
        $this->yearsRemaining = $yearsRemaining;
        return $this;
    }

    public function getSignedThrough(): ?int
    {
        return $this->signedThrough;
    }

    public function setSignedThrough(?int $signedThrough): static
    {
        $this->signedThrough = $signedThrough;
        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): static
    {
        $this->active = $active;
        return $this;
    }

    public function getSeasonReference(): ?string
    {
        return $this->seasonReference;
    }

    public function setSeasonReference(?string $seasonReference): static
    {
        $this->seasonReference = $seasonReference;
        return $this;
    }

    public function getTeamReference(): ?string
    {
        return $this->teamReference;
    }

    public function setTeamReference(?string $teamReference): static
    {
        $this->teamReference = $teamReference;
        return $this;
    }
}
