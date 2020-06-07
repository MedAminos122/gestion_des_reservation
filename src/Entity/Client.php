<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=254)
     */
    private $nom_cli;

    /**
     * @ORM\Column(type="string", length=254)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=254)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=254)
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCli(): ?string
    {
        return $this->nom_cli;
    }

    public function setNomCli(string $nom_cli): self
    {
        $this->nom_cli = $nom_cli;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
