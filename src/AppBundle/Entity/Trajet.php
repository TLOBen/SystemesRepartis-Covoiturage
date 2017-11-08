<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="trajets")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TrajetRepository")
 */
class Trajet
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxPlaces;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeDepart;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeArrivee;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $prix;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $tousLesJours;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $toutesLesSemaines;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $tousLesMois;
    
    /**
     * @ORM\OneToMany(targetEntity="Reservation", mappedBy="trajet")
     */
    private $reservations;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $heureDepart;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateDepart;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($is)
    {
        $this->id = $is;
    }
    
    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }
    
    public function getMaxPlaces()
    {
        return $this->maxPlaces;
    }

    public function setMaxPlaces($maxPlaces)
    {
        $this->maxPlaces = $maxPlaces;
    }
    
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;
    }
    
    public function getVilleArrivee()
    {
        return $this->villeArrivee;
    }

    public function setVilleArrivee($villeArrivee)
    {
        $this->villeArrivee = $villeArrivee;
    }
    
    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    
    public function getTousLesJours()
    {
        return $this->tousLesJours;
    }

    public function setTousLesJours($tousLesJours)
    {
        $this->tousLesJours = $tousLesJours;
    }
    
    public function getToutesLesSemaines()
    {
        return $this->toutesLesSemaines;
    }

    public function setToutesLesSemaines($toutesLesSemaines)
    {
        $this->toutesLesSemaines = $toutesLesSemaines;
    }
    public function getTousLesMois()
    {
        return $this->tousLesMois;
    }

    public function setTousLesMois($tousLesMois)
    {
        $this->tousLesMois = $tousLesMois;
    }
    
    public function getReservations() {
        return $this->reservations;
    }
    
    public function getHeureDepart() {
        return $this->heureDepart;
    }
    
    public function setHeureDepart($heureDepart)
    {
        $this->heureDepart = $heureDepart;
    }
    
    public function getDateDepart() {
        return $this->dateDepart;
    }
    
    public function setDateDepart($dateDepart) {
        $this->dateDepart = $dateDepart;
    }
}
