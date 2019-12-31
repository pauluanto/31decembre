<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProfilRepository")
 */
class Profil
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="integer")
     */
    private $taille;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $poid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $couleur_yeux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $couleur_cheveux;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $citation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $livres;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cinema;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $loisir;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $langue_parle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $activite_prefere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoid(): ?int
    {
        return $this->poid;
    }

    public function setPoid(?int $poid): self
    {
        $this->poid = $poid;

        return $this;
    }

    public function getCouleurYeux(): ?string
    {
        return $this->couleur_yeux;
    }

    public function setCouleurYeux(string $couleur_yeux): self
    {
        $this->couleur_yeux = $couleur_yeux;

        return $this;
    }

    public function getCouleurCheveux(): ?string
    {
        return $this->couleur_cheveux;
    }

    public function setCouleurCheveux(string $couleur_cheveux): self
    {
        $this->couleur_cheveux = $couleur_cheveux;

        return $this;
    }

    public function getCitation(): ?string
    {
        return $this->citation;
    }

    public function setCitation(?string $citation): self
    {
        $this->citation = $citation;

        return $this;
    }

    public function getLivres(): ?string
    {
        return $this->livres;
    }

    public function setLivres(string $livres): self
    {
        $this->livres = $livres;

        return $this;
    }

    public function getCinema(): ?string
    {
        return $this->cinema;
    }

    public function setCinema(string $cinema): self
    {
        $this->cinema = $cinema;

        return $this;
    }

    public function getLoisir(): ?string
    {
        return $this->loisir;
    }

    public function setLoisir(string $loisir): self
    {
        $this->loisir = $loisir;

        return $this;
    }

    public function getLangueParle(): ?string
    {
        return $this->langue_parle;
    }

    public function setLangueParle(string $langue_parle): self
    {
        $this->langue_parle = $langue_parle;

        return $this;
    }

    public function getActivitePrefere(): ?string
    {
        return $this->activite_prefere;
    }

    public function setActivitePrefere(string $activite_prefere): self
    {
        $this->activite_prefere = $activite_prefere;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
}
