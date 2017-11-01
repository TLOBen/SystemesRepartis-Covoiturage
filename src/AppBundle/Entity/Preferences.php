<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="preferences")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PreferencesRepository")
 */
class Preferences
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
}
