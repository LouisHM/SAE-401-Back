<?php

namespace App\Entity;

use App\Entity\Product;
use App\Repository\SneakersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: SneakersRepository::class)]
class Sneakers extends Product
{

    #[ORM\Column(type: Types::ARRAY)]
    #[Groups(['cat:get'])]
    private array $color = [];

    #[ORM\Column(type: Types::ARRAY)]
    #[Groups(['cat:get'])]
    private array $size = [];

    public function getColor(): array
    {
        return $this->color;
    }

    public function setColor(array $color): self
    {
        $this->color = $color;

        return $this;
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
}
