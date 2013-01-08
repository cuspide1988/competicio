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
     * @ORM\ManyToOne(targetEntity="Competition\TeamBundle\Entity\Team", inversedBy="matchMapTeam")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     */
    protected $team;

    /**
     * @ORM\ManyToOne(targetEntity="MatchGame", inversedBy="matchMapTeam")
     * @ORM\JoinColumn(name="matchgame_id", referencedColumnName="id")
     */
    protected $matchGame;

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

    /**
     * Set matchGame
     *
     * @param \Competition\MatchBundle\Entity\MatchGame $matchGame
     * @return MatchMapTeam
     */
    public function setMatchGame(\Competition\MatchBundle\Entity\MatchGame $matchGame = null)
    {
        $this->matchGame = $matchGame;
    
        return $this;
    }

    /**
     * Get matchGame
     *
     * @return \Competition\MatchBundle\Entity\MatchGame 
     */
    public function getMatchGame()
    {
        return $this->matchGame;
    }
}