<?php

namespace Test\RecognitionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="resource")
 * @ORM\Entity
 */
class Resource
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
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="blurb", type="text")
     */
    private $blurb;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var array
     *
     * @ORM\Column(name="genre", type="array")
     */
    private $genre;

    /**
     * @var date
     *
     * @ORM\Column(name="date_created", type="date")
     */
    private $dateCreated;

    /**
     * @var date
     *
     * @ORM\Column(name="date_posted", type="date")
     */
    private $datePosted;

public function __construct() {
    $this->dateCreated = new \DateTime();
    $this->datePosted = new \DateTime();
}


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
     * @return Resource
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
     * Set author
     *
     * @param string $author
     * @return Resource
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set blurb
     *
     * @param string $blurb
     * @return Resource
     */
    public function setBlurb($blurb)
    {
        $this->blurb = $blurb;
    
        return $this;
    }

    /**
     * Get blurb
     *
     * @return string 
     */
    public function getBlurb()
    {
        return $this->blurb;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Resource
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set genre
     *
     * @param array $genre
     * @return Resource
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    
        return $this;
    }

    /**
     * Get genre
     *
     * @return array 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set dateCreated
     *
     * @param date $dateCreated
     * @return Resource
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return date
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set datePosted
     *
     * @param date $datePosted
     * @return Resource
     */
    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
    
        return $this;
    }

    /**
     * Get datePosted
     *
     * @return date
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }
}
