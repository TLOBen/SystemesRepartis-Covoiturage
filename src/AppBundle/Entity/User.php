<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Preference", cascade="persist")
     */
    private $preference;

    public function __construct()
    {
        parent::__construct();
        
        $this->preference = new Preference();
    }
    
    public function getPreference()
    {
        return $this->preference;
    }

    public function setPreference($preference)
    {
        $this->preference = $preference;
    }
}
