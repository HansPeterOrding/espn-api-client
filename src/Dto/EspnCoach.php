<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnCoach
{
    private ?string $id = null;
    private ?string $uid = null;
    private ?string $firstName = null;
    private ?string $lastName = null;
    private ?EspnAddress $birthPlace = null;
    private ?int $experience = null;
    private ?string $collegeReference = null;
    private ?string $personReference = null;
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

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(?string $uid): static
    {
        $this->uid = $uid;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getBirthPlace(): ?EspnAddress
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(?EspnAddress $birthPlace): static
    {
        $this->birthPlace = $birthPlace;
        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(?int $experience): static
    {
        $this->experience = $experience;
        return $this;
    }

    public function getCollegeReference(): ?string
    {
        return $this->collegeReference;
    }

    public function setCollegeReference(?string $collegeReference): static
    {
        $this->collegeReference = $collegeReference;
        return $this;
    }

    public function getPersonReference(): ?string
    {
        return $this->personReference;
    }

    public function setPersonReference(?string $personReference): static
    {
        $this->personReference = $personReference;
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
