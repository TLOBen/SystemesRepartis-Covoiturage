<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="paiements")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @ORM\OneToOne(targetEntity="Trajet")
     */
    private $trajet;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $montant;
    
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
    
    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($montant)
    {
        $this->montant = $montant;
    }
}
