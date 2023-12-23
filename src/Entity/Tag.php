<?php

namespace App\Entity;

use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagRepository::class)]
class Tag
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $tag_name = null;

    #[ORM\ManyToMany(targetEntity: Lien::class, mappedBy: 'tag_id')]
    private Collection $liens;

    public function __construct()
    {
        $this->liens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTagName(): ?string
    {
        return $this->tag_name;
    }

    public function setTagName(string $tag_name): static
    {
        $this->tag_name = $tag_name;

        return $this;
    }

    /**
     * @return Collection<int, Lien>
     */
    public function getLiens(): Collection
    {
        return $this->liens;
    }

    public function addLien(Lien $lien): static
    {
        if (!$this->liens->contains($lien)) {
            $this->liens->add($lien);
            $lien->addTagId($this);
        }

        return $this;
    }

    public function removeLien(Lien $lien): static
    {
        if ($this->liens->removeElement($lien)) {
            $lien->removeTagId($this);
        }

        return $this;
    }
}
