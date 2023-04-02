<?php

namespace App\Entity;

use App\Repository\MangaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: MangaRepository::class)]
#[ApiResource()]
class Manga
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 50)]
    private ?string $editeur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datedeparution = null;

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\Column(nullable: true)]
    private ?int $nombredepages = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dessinateur = null;

    #[ORM\Column(length: 50)]
    private ?string $type = null;

    #[ORM\Column]
    private ?int $nbvolumes = null;

    #[ORM\Column]
    private ?int $volumes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(string $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getDatedeparution(): ?\DateTimeInterface
    {
        return $this->datedeparution;
    }

    public function setDatedeparution(\DateTimeInterface $datedeparution): self
    {
        $this->datedeparution = $datedeparution;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNombredepages(): ?int
    {
        return $this->nombredepages;
    }

    public function setNombredepages(?int $nombredepages): self
    {
        $this->nombredepages = $nombredepages;

        return $this;
    }

    public function getDessinateur(): ?string
    {
        return $this->dessinateur;
    }

    public function setDessinateur(?string $dessinateur): self
    {
        $this->dessinateur = $dessinateur;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNbvolumes(): ?int
    {
        return $this->nbvolumes;
    }

    public function setNbvolumes(int $nbvolumes): self
    {
        $this->nbvolumes = $nbvolumes;

        return $this;
    }

    public function getVolumes(): ?int
    {
        return $this->volumes;
    }

    public function setVolumes(int $volumes): self
    {
        $this->volumes = $volumes;

        return $this;
    }
}
