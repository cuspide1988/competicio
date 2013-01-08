<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 7/01/13
 * Time: 22:33
 */
namespace Competition\GameBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="game_mode")
 */
class GameMode
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="id")
     */
    protected $game;

    /**
     * @ORM\Column(type="integer")
     */
    protected $numberOfTeams;

    /**
     * @ORM\Column(type="integer")
     */
    protected $numberOfPlayersPerTeam;

    /**
     * @ORM\OneToMany(targetEntity="Competition\MatchBundle\Entity\Penalty", mappedBy="gameMode")
     */
    protected $penalties;

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
     * @param \Competition\GameBundle\Entity\Game $gameId
     * @return GameMode
     */
    public function setGameId(\Competition\GameBundle\Entity\Game $gameId)
    {
        $this->gameId = $gameId;
    
        return $this;
    }

    /**
     * Get gameId
     *
     * @return \Competition\GameBundle\Entity\Game 
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * Set game
     *
     * @param \Competition\GameBundle\Entity\Game $game
     * @return GameMode
     */
    public function setGame(\Competition\GameBundle\Entity\Game $game = null)
    {
        $this->game = $game;
    
        return $this;
    }

    /**
     * Get game
     *
     * @return \Competition\GameBundle\Entity\Game 
     */
    public function getGame()
    {
        return $this->game;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->penalties = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add penalties
     *
     * @param \Competition\MatchBundle\Entity\Penalty $penalties
     * @return GameMode
     */
    public function addPenaltie(\Competition\MatchBundle\Entity\Penalty $penalties)
    {
        $this->penalties[] = $penalties;
    
        return $this;
    }

    /**
     * Remove penalties
     *
     * @param \Competition\MatchBundle\Entity\Penalty $penalties
     */
    public function removePenaltie(\Competition\MatchBundle\Entity\Penalty $penalties)
    {
        $this->penalties->removeElement($penalties);
    }

    /**
     * Get penalties
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPenalties()
    {
        return $this->penalties;
    }
}