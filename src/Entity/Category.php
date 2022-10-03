<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\Column]
    private ?string $ref = null;

    #[ORM\Column(length: 150)]
    private ?string $title = null;

    
    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setref(string $title): self
    {
        $this->ref = $ref;

        return $this;
    }
    

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }


}
