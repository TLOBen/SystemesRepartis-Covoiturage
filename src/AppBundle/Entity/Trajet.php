<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(type="datetime")
     * @Assert\GreaterThan(
     *     "today",
     *     message="Vous ne pouvez pas ajouter un trajet daté d'avant ajourd'hui"
     * )
     */
    private $dateDepart;

    /**
     * @ORM\OneToMany(targetEntity="Reservation", mappedBy="trajet")
     */
    private $reservations;
    
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
    
    public function getReservations()
    {
        return $this->reservations;
    }
    
    public function getDateDepart()
    {
        return $this->dateDepart;
    }
    
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;
    }
}
