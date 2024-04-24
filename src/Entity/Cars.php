<?php

namespace App\Entity;

use App\Repository\CarsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarsRepository::class)]
class Cars
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $model_type = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?int $AMC = null;

    #[ORM\Column]
    private ?int $kilometres = null;

    #[ORM\Column(length: 255)]
    private ?string $fuel = null;

    #[ORM\Column(length: 255)]
    private ?string $BV_transmission = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModelType(): ?string
    {
        return $this->model_type;
    }

    public function setModelType(string $model_type): static
    {
        $this->model_type = $model_type;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getAMC(): ?int
    {
        return $this->AMC;
    }

    public function setAMC(int $AMC): static
    {
        $this->AMC = $AMC;

        return $this;
    }

    public function getKilometres(): ?int
    {
        return $this->kilometres;
    }

    public function setKilometres(int $kilometres): static
    {
        $this->kilometres = $kilometres;

        return $this;
    }

    public function getFuel(): ?string
    {
        return $this->fuel;
    }

    public function setFuel(string $fuel): static
    {
        $this->fuel = $fuel;

        return $this;
    }

    public function getBVTransmission(): ?string
    {
        return $this->BV_transmission;
    }

    public function setBVTransmission(string $BV_transmission): static
    {
        $this->BV_transmission = $BV_transmission;

        return $this;
    }
}
