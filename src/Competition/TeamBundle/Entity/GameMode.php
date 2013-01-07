<?php

namespace Competition\TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameMode
 */
class GameMode
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $numberOfTeams;

    /**
     * @var integer
     */
    private $numberOfPlayersPerTeam;

    /**
     * @var \Competition\TeamBundle\Entity\Game
     */
    private $gameId;


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
     * Set numberOfTeams
     *
     * @param integer $numberOfTeams
     * @return GameMode
     */
    public function setNumberOfTeams($numberOfTeams)
    {
        $this->numberOfTeams = $numberOfTeams;
    
        return $this;
    }

    /**
     * Get numberOfTeams
     *
     * @return integer 
     */
    public function getNumberOfTeams()
    {
        return $this->numberOfTeams;
    }

    /**
     * Set numberOfPlayersPerTeam
     *
     * @param integer $numberOfPlayersPerTeam
     * @return GameMode
     */
    public function setNumberOfPlayersPerTeam($numberOfPlayersPerTeam)
    {
        $this->numberOfPlayersPerTeam = $numberOfPlayersPerTeam;
    
        return $this;
    }

    /**
     * Get numberOfPlayersPerTeam
     *
     * @return integer 
     */
    public function getNumberOfPlayersPerTeam()
    {
        return $this->numberOfPlayersPerTeam;
    }

    /**
     * Set gameId
     *
     * @param \Competition\TeamBundle\Entity\Game $gameId
     * @return GameMode
     */
    public function setGameId(\Competition\TeamBundle\Entity\Game $gameId)
    {
        $this->gameId = $gameId;
    
        return $this;
    }

    /**
     * Get gameId
     *
     * @return \Competition\TeamBundle\Entity\Game 
     */
    public function getGameId()
    {
        return $this->gameId;
    }
}