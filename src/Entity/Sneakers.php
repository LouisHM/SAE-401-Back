<?php

namespace App\Entity;

use App\Entity\Product;
use App\Repository\SneakersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SneakersRepository::class)]
class Sneakers extends Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $size = [];

    #[ORM\Column(type: Types::ARRAY)]
    private array $color = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSize(): array
    {
        return $this->size;
    }

    public function setSize(array $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getColor(): array
    {
        return $this->color;
    }

    public function setColor(array $color): self
    {
        $this->color = $color;

        return $this;
    }
}
