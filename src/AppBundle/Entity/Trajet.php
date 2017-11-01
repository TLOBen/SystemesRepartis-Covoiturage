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
}
