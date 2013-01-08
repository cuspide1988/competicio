<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 8/01/13
 * Time: 22:43
 */
namespace Competition\MatchBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="penalty")
 */
class Penalty
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $type;

    /**
     * @ORM\Column(type="integer")
     */
    protected $points;

    /**
     * @ORM\Column(type="string", length=256)
     */
    protected $description;

    /**
     * @ORM\ManyToOne(targetEntity="Competition\GameBundle\Entity\GameMode", inversedBy="penalties")
     * @ORM\JoinColumn(name="gamemode_id", referencedColumnName="id")
     */
    protected $gameMode;

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
     * Set type
     *
     * @param string $type
     * @return Penalty
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return Penalty
     */
    public function setPoints($points)
    {
        $this->points = $points;
    
        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Penalty
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
     * Set gameMode
     *
     * @param \Competition\GameBundle\Entity\GameMode $gameMode
     * @return Penalty
     */
    public function setGameMode(\Competition\GameBundle\Entity\GameMode $gameMode = null)
    {
        $this->gameMode = $gameMode;
    
        return $this;
    }

    /**
     * Get gameMode
     *
     * @return \Competition\GameBundle\Entity\GameMode 
     */
    public function getGameMode()
    {
        return $this->gameMode;
    }
}