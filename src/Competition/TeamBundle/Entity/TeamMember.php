<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jordi
 * Date: 24/12/12
 * Time: 0:27
 * To change this template use File | Settings | File Templates.
 */
namespace Competition\TeamBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="team_member")
 */
class TeamMember
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="teamMembers")
     */
    protected $team;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Competition\UserBundle\Entity\User", inversedBy="teamMembers")
     */
    protected $user;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $accepted;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $joined;


    public function __construct()
    {
        $this->setJoined(new \DateTime());
    }

    /**
     * Set accepted
     *
     * @param boolean $accepted
     * @return TeamMember
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;
    
        return $this;
    }

    /**
     * Get accepted
     *
     * @return \bool 
     */
    public function getAccepted()
    {
        return $this->accepted;
    }

    /**
     * Set joined
     *
     * @param \DateTime $joined
     * @return TeamMember
     */
    public function setJoined($joined)
    {
        $this->joined = $joined;
    
        return $this;
    }

    /**
     * Get joined
     *
     * @return \DateTime 
     */
    public function getJoined()
    {
        return $this->joined;
    }

    /**
     * Set team
     *
     * @param \Competition\TeamBundle\Entity\Team $team
     * @return TeamMember
     */
    public function setTeam(\Competition\TeamBundle\Entity\Team $team)
    {
        $this->team = $team;
    
        return $this;
    }

    /**
     * Get team
     *
     * @return \Competition\TeamBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set user
     *
     * @param \Competition\UserBundle\Entity\User $user
     * @return TeamMember
     */
    public function setUser(\Competition\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Competition\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}