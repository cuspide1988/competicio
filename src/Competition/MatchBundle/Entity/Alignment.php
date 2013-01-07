<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 7/01/13
 * Time: 22:26
 */
namespace Competition\MatchBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="alignment")
 */
class Alignment
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Competition\TeamBundle\Entity\Team", inversedBy="id")
     */
    protected $team;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Competition\UserBundle\Entity\User", inversedBy="id")
     */
    protected $user;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="MatchGame", inversedBy="id")
     */
    protected $match;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isValid;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modified;

    /**
     * Set isValid
     *
     * @param boolean $isValid
     * @return Alignment
     */
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;
    
        return $this;
    }

    /**
     * Get isValid
     *
     * @return boolean 
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Alignment
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set teamId
     *
     * @param \Competition\TeamBundle\Entity\Team $teamId
     * @return Alignment
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
     * @return Alignment
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
     * Set matchId
     *
     * @param \Competition\MatchBundle\Entity\MatchGame $matchId
     * @return Alignment
     */
    public function setMatchId(\Competition\MatchBundle\Entity\MatchGame $matchId)
    {
        $this->matchId = $matchId;
    
        return $this;
    }

    /**
     * Get matchId
     *
     * @return \Competition\MatchBundle\Entity\MatchGame 
     */
    public function getMatchId()
    {
        return $this->matchId;
    }

    /**
     * Set team
     *
     * @param \Competition\TeamBundle\Entity\Team $team
     * @return Alignment
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
     * @return Alignment
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

    /**
     * Set match
     *
     * @param \Competition\MatchBundle\Entity\MatchGame $match
     * @return Alignment
     */
    public function setMatch(\Competition\MatchBundle\Entity\MatchGame $match)
    {
        $this->match = $match;
    
        return $this;
    }

    /**
     * Get match
     *
     * @return \Competition\MatchBundle\Entity\MatchGame 
     */
    public function getMatch()
    {
        return $this->match;
    }
}