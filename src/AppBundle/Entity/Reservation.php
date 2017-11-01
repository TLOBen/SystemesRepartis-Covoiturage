<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="reservations")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="User")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Trajet")
     */
    private $trajet;
    
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
    
    public function getTrajet()
    {
        return $this->trajet;
    }

    public function setTrajet($trajet)
    {
        $this->trajet = $trajet;
    }
}
