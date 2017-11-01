<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="arrets")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArretRepository")
 */
class Arret
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Trajet")
     */
    private $trajet;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $ville;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($is)
    {
        $this->id = $is;
    }
    
    public function getTrajet()
    {
        return $this->trajet;
    }

    public function setTrajet($trajet)
    {
        $this->trajet = $trajet;
    }
    
    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }
}
