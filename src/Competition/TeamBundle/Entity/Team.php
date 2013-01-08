<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jordi
 * Date: 24/12/12
 * Time: 0:03
 * To change this template use File | Settings | File Templates.
 */
namespace Competition\TeamBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="team")
 */
class Team
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=16)
     */
    protected $tag;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $web;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="string", length=256)
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $avatar;

    /**
     * @ORM\Column(type="integer")
     */
    protected $country;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\OneToMany(targetEntity="Competition\MatchBundle\Entity\MatchMapTeam", mappedBy="team")
     */
    protected $matchMapTeam;

    public function __construct()
    {

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
     * @return Team
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
     * Set tag
     *
     * @param string $tag
     * @return Team
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Team
     */
    public function setWeb($web)
    {
        $this->web = $web;
    
        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Team
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Team
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Team
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set country
     *
     * @param integer $country
     * @return Team
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return integer 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Team
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add matchMapTeam
     *
     * @param \Competition\MatchBundle\Entity\MatchMapTeam $matchMapTeam
     * @return Team
     */
    public function addMatchMapTeam(\Competition\MatchBundle\Entity\MatchMapTeam $matchMapTeam)
    {
        $this->matchMapTeam[] = $matchMapTeam;
    
        return $this;
    }

    /**
     * Remove matchMapTeam
     *
     * @param \Competition\MatchBundle\Entity\MatchMapTeam $matchMapTeam
     */
    public function removeMatchMapTeam(\Competition\MatchBundle\Entity\MatchMapTeam $matchMapTeam)
    {
        $this->matchMapTeam->removeElement($matchMapTeam);
    }

    /**
     * Get matchMapTeam
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatchMapTeam()
    {
        return $this->matchMapTeam;
    }
}