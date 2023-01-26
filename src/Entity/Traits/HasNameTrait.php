<?php

namespace App\Entity\Traits;


use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;


trait HasNameTrait
{
    #[ORM\Column(length: 128)]
   
    private ?string $name = null;

    /**
     *@Gedmo\Slug(fields= {"name"}, unique=true)
     */
    #[ORM\Column(length: 128, unique: true)]      
    private ?string $slug = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}