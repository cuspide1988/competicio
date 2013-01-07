<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 7/01/13
 * Time: 22:53
 */

namespace Competition\MatchBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="match_map_team")
 */

class MatchMapTeam
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Competition\TeamBundle\Entity\Team", inversedBy="id")
     */
    protected $team;

    /**
     * @ORM\ManyToOne(targetEntity="MatchGame", inversedBy="id")
     */
    protected $match;

    /**
     * @ORM\ManyToOne(targetEntity="Map", inversedBy="id")
     */
    protected $map;

    /**
     * @ORM\Column(type="integer")
     */
    protected $score;

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
     * Set score
     *
     * @param integer $score
     * @return MatchMapTeam
     */
    public function setScore($score)
    {
        $this->score = $score;
    
        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set teamId
     *
     * @param \Competition\TeamBundle\Entity\Team $teamId
     * @return MatchMapTeam
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
     * Set matchId
     *
     * @param \Competition\MatchBundle\Entity\MatchGame $matchId
     * @return MatchMapTeam
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
     * Set mapId
     *
     * @param \Competition\MatchBundle\Entity\Map $mapId
     * @return MatchMapTeam
     */
    public function setMapId(\Competition\MatchBundle\Entity\Map $mapId = null)
    {
        $this->mapId = $mapId;
    
        return $this;
    }

    /**
     * Get mapId
     *
     * @return \Competition\MatchBundle\Entity\Map 
     */
    public function getMapId()
    {
        return $this->mapId;
    }

    /**
     * Set team
     *
     * @param \Competition\TeamBundle\Entity\Team $team
     * @return MatchMapTeam
     */
    public function setTeam(\Competition\TeamBundle\Entity\Team $team = null)
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
     * Set match
     *
     * @param \Competition\MatchBundle\Entity\MatchGame $match
     * @return MatchMapTeam
     */
    public function setMatch(\Competition\MatchBundle\Entity\MatchGame $match = null)
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

    /**
     * Set map
     *
     * @param \Competition\MatchBundle\Entity\Map $map
     * @return MatchMapTeam
     */
    public function setMap(\Competition\MatchBundle\Entity\Map $map = null)
    {
        $this->map = $map;
    
        return $this;
    }

    /**
     * Get map
     *
     * @return \Competition\MatchBundle\Entity\Map 
     */
    public function getMap()
    {
        return $this->map;
    }
}