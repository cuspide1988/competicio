<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jordi
 * Date: 24/12/12
 * Time: 0:03
 * To change this template use File | Settings | File Templates.
 */
namespace Competition\MatchBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="matchgame")
 */
class MatchGame
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $scheduledDate;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $limitDate;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isClosed;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $serverIp;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $broadcast;


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
     * Set scheduledDate
     *
     * @param \DateTime $scheduledDate
     * @return MatchGame
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->scheduledDate = $scheduledDate;
    
        return $this;
    }

    /**
     * Get scheduledDate
     *
     * @return \DateTime 
     */
    public function getScheduledDate()
    {
        return $this->scheduledDate;
    }

    /**
     * Set limitDate
     *
     * @param \DateTime $limitDate
     * @return MatchGame
     */
    public function setLimitDate($limitDate)
    {
        $this->limitDate = $limitDate;
    
        return $this;
    }

    /**
     * Get limitDate
     *
     * @return \DateTime 
     */
    public function getLimitDate()
    {
        return $this->limitDate;
    }

    /**
     * Set isClosed
     *
     * @param boolean $isClosed
     * @return MatchGame
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
    
        return $this;
    }

    /**
     * Get isClosed
     *
     * @return boolean 
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Set serverIp
     *
     * @param string $serverIp
     * @return MatchGame
     */
    public function setServerIp($serverIp)
    {
        $this->serverIp = $serverIp;
    
        return $this;
    }

    /**
     * Get serverIp
     *
     * @return string 
     */
    public function getServerIp()
    {
        return $this->serverIp;
    }

    /**
     * Set broadcast
     *
     * @param string $broadcast
     * @return MatchGame
     */
    public function setBroadcast($broadcast)
    {
        $this->broadcast = $broadcast;
    
        return $this;
    }

    /**
     * Get broadcast
     *
     * @return string 
     */
    public function getBroadcast()
    {
        return $this->broadcast;
    }
}