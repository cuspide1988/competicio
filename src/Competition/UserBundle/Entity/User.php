<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 22/12/12
 * Time: 10:31
 * To change this template use File | Settings | File Templates.
 */

namespace Competition\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $surname;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    protected $country;

    /**
     * @ORM\OneToMany(targetEntity="Competition\TeamBundle\Entity\TeamMember", mappedBy="user", cascade={"persist", "remove"})
     */
    protected $teamMembers;

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    public function setTeamMembers($teamMembers)
    {
        $this->teamMembers = $teamMembers;
    }

    public function getTeamMembers()
    {
        return $this->teamMembers;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }
}