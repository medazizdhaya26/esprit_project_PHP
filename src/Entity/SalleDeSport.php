<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class SalleDeSport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $id_univercite = null;

    #[ORM\Column(length: 255)]
    private ?string $coech = null;

    #[ORM\Column(length: 255)]
    private ?string $superviseur = null;

    #[ORM\Column(length: 255)]
    private ?string $prix_des_abonnement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUnivercite(): ?string
    {
        return $this->id_univercite;
    }

    public function setIdUnivercite(string $id_univercite): static
    {
        $this->id_univercite = $id_univercite;
        return $this;
    }

    public function getCoech(): ?string
    {
        return $this->coech;
    }

    public function setCoech(string $coech): static
    {
        $this->coech = $coech;
        return $this;
    }

    public function getSuperviseur(): ?string
    {
        return $this->superviseur;
    }

    public function setSuperviseur(string $superviseur): static
    {
        $this->superviseur = $superviseur;
        return $this;
    }

    public function getPrixDesAbonnement(): ?string
    {
        return $this->prix_des_abonnement;
    }

    public function setPrixDesAbonnement(string $prix_des_abonnement): static
    {
        $this->prix_des_abonnement = $prix_des_abonnement;
        return $this;
    }
}
