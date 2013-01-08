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
     * @ORM\ManyToOne(targetEntity="Competition\UserBundle\Entity\User", inversedBy="id")
     */
    protected $user;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="MatchMapTeam", inversedBy="id")
     */
    protected $match_map_team;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isValid;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isMercenary;

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
     * Set isMercenary
     *
     * @param boolean $isMercenary
     * @return Alignment
     */
    public function setIsMercenary($isMercenary)
    {
        $this->isMercenary = $isMercenary;
    
        return $this;
    }

    /**
     * Get isMercenary
     *
     * @return boolean 
     */
    public function getIsMercenary()
    {
        return $this->isMercenary;
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
     * Set match_map_team
     *
     * @param \Competition\MatchBundle\Entity\MatchMapTeam $matchMapTeam
     * @return Alignment
     */
    public function setMatchMapTeam(\Competition\MatchBundle\Entity\MatchMapTeam $matchMapTeam)
    {
        $this->match_map_team = $matchMapTeam;
    
        return $this;
    }

    /**
     * Get match_map_team
     *
     * @return \Competition\MatchBundle\Entity\MatchMapTeam 
     */
    public function getMatchMapTeam()
    {
        return $this->match_map_team;
    }
}