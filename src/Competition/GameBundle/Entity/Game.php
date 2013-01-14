<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 30/12/12
 * Time: 13:12
 */
namespace Competition\GameBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Competition\MatchBundle\Entity\Map;

/**
 * @ORM\Entity(repositoryClass="Competition\GameBundle\Repository\GameRepository")
 * @ORM\Table(name="game")
 */
class Game
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $alias;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $slug;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isActive;

    /**
     * @ORM\OneToMany(targetEntity="Competition\MatchBundle\Entity\Map", mappedBy="game")
     */
    protected $maps;

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
     * Set name
     *
     * @param string $name
     * @return Game
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return Game
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    
        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    public function __toString()
    {
        return $this->getName();
    }


    /**
     * Set slug
     *
     * @param string $slug
     * @return Game
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Game
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->maps = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add maps
     *
     * @param \Competition\MatchBundle\Entity\Map $maps
     * @return Game
     */
    public function addMap(Map $maps)
    {
        $this->maps[] = $maps;
    
        return $this;
    }

    /**
     * Remove maps
     *
     * @param \Competition\MatchBundle\Entity\Map $maps
     */
    public function removeMap(Map $maps)
    {
        $this->maps->removeElement($maps);
    }

    /**
     * Get maps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMaps()
    {
        return $this->maps;
    }
}