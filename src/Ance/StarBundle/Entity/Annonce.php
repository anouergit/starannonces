<?php

namespace Ance\StarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ance\StarBundle\Entity\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="shortDec", type="text")
     */
    private $shortDec;

    /**
     * @var string
     *
     * @ORM\Column(name="longDec", type="text")
     */
    private $longDec;
    
    
     
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
     * Set title
     *
     * @param string $title
     * @return Annonce
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set shortDec
     *
     * @param string $shortDec
     * @return Annonce
     */
    public function setShortDec($shortDec)
    {
        $this->shortDec = $shortDec;

        return $this;
    }

    /**
     * Get shortDec
     *
     * @return string 
     */
    public function getShortDec()
    {
        return $this->shortDec;
    }

    /**
     * Set longDec
     *
     * @param string $longDec
     * @return Annonce
     */
    public function setLongDec($longDec)
    {
        $this->longDec = $longDec;

        return $this;
    }

    /**
     * Get longDec
     *
     * @return string 
     */
    public function getLongDec()
    {
        return $this->longDec;
    }
}
