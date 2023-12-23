<?php

namespace App\Entity;

use App\Repository\LienRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LienRepository::class)]
class Lien
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $lien_url = null;

    #[ORM\Column(length: 255)]
    private ?string $lien_titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $lien_desc = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lien_image = null;

    #[ORM\ManyToMany(targetEntity: Tag::class, inversedBy: 'liens')]
    private Collection $tag_id;

    public function __construct()
    {
        $this->tag_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLienUrl(): ?string
    {
        return $this->lien_url;
    }

    public function setLienUrl(string $lien_url): static
    {
        $this->lien_url = $lien_url;

        return $this;
    }

    public function getLienTitre(): ?string
    {
        return $this->lien_titre;
    }

    public function setLienTitre(string $lien_titre): static
    {
        $this->lien_titre = $lien_titre;

        return $this;
    }

    public function getLienDesc(): ?string
    {
        return $this->lien_desc;
    }

    public function setLienDesc(string $lien_desc): static
    {
        $this->lien_desc = $lien_desc;

        return $this;
    }

    public function getLienImage(): ?string
    {
        return $this->lien_image;
    }

    public function setLienImage(?string $lien_image): static
    {
        $this->lien_image = $lien_image;

        return $this;
    }

    /**
     * @return Collection<int, Tag>
     */
    public function getTagId(): Collection
    {
        return $this->tag_id;
    }

    public function addTagId(Tag $tagId): static
    {
        if (!$this->tag_id->contains($tagId)) {
            $this->tag_id->add($tagId);
        }

        return $this;
    }

    public function removeTagId(Tag $tagId): static
    {
        $this->tag_id->removeElement($tagId);

        return $this;
    }
}
