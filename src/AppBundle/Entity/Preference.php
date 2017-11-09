<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="preference")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PreferenceRepository")
 */
class Preference
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $fumeur;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $animaux;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $climatisation;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $grosBagage;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $velo;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $ski;
    
    public function __construct()
    {
        $this->setFumeur(false);
        $this->setAnimaux(false);
        $this->setClimatisation(false);
        $this->setGrosBagage(false);
        $this->setVelo(false);
        $this->setSki(false);
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($is)
    {
        $this->id = $is;
    }
    
    public function getFumeur()
    {
        return $this->fumeur;
    }

    public function setFumeur($fumeur)
    {
        $this->fumeur = $fumeur;
    }
    
    public function getAnimaux()
    {
        return $this->animaux;
    }

    public function setAnimaux($animaux)
    {
        $this->animaux = $animaux;
    }
    
    public function getClimatisation()
    {
        return $this->climatisation;
    }

    public function setClimatisation($climatisation)
    {
        $this->climatisation = $climatisation;
    }
    
    public function getGrosBagage()
    {
        return $this->grosBagage;
    }

    public function setGrosBagage($grosBagage)
    {
        $this->grosBagage = $grosBagage;
    }
    
    public function getVelo()
    {
        return $this->velo;
    }

    public function setVelo($velo)
    {
        $this->velo = $velo;
    }
    
    public function getSki()
    {
        return $this->ski;
    }

    public function setSki($ski)
    {
        $this->ski = $ski;
    }
}
