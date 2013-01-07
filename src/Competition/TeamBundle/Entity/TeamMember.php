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
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="id")
     */
    protected $team;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Competition\UserBundle\Entity\User", inversedBy="id")
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

    /**
     * @ORM\Column(type="integer")
     */
    protected $gradeId;


    /**
     * Set accepted
     *
     * @param \bool $accepted
     * @return TeamMember
     */
    public function setAccepted(\bool $accepted)
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
     * Set gradeId
     *
     * @param integer $gradeId
     * @return TeamMember
     */
    public function setGradeId($gradeId)
    {
        $this->gradeId = $gradeId;
    
        return $this;
    }

    /**
     * Get gradeId
     *
     * @return integer 
     */
    public function getGradeId()
    {
        return $this->gradeId;
    }

    /**
     * Set teamId
     *
     * @param \Competition\TeamBundle\Entity\Team $teamId
     * @return TeamMember
     */
    public function setTeamId(\Competition\TeamBundle\Entity\Team $teamId)
    {
        $this->teamId = $teamId;
    
        return $this;
    }

    /**
     * Get teamId
     *
     * @return \Competition\TeamBundle\Entity\Team 
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set userId
     *
     * @param \Competition\UserBundle\Entity\User $userId
     * @return TeamMember
     */
    public function setUserId(\Competition\UserBundle\Entity\User $userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return \Competition\UserBundle\Entity\User 
     */
    public function getUserId()
    {
        return $this->userId;
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