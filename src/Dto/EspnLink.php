<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use DateTime;

final class EspnLink
{
    private ?string $language = null;
    private array $rel = [];
    private ?string $href = null;
    private ?string $text = null;
    private ?string $shortText = null;
    private ?bool $isExternal = null;
    private ?bool $isPremium = null;

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): static
    {
        $this->language = $language;
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

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHref(?string $href): static
    {
        $this->href = $href;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): static
    {
        $this->text = $text;
        return $this;
    }

    public function getShortText(): ?string
    {
        return $this->shortText;
    }

    public function setShortText(?string $shortText): static
    {
        $this->shortText = $shortText;
        return $this;
    }

    public function getIsExternal(): ?bool
    {
        return $this->isExternal;
    }

    public function setIsExternal(?bool $isExternal): static
    {
        $this->isExternal = $isExternal;
        return $this;
    }

    public function getIsPremium(): ?bool
    {
        return $this->isPremium;
    }

    public function setIsPremium(?bool $isPremium): static
    {
        $this->isPremium = $isPremium;
        return $this;
    }
}
