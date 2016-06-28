<?php

namespace Test\PublicationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Books
 *
 * @ORM\Table(name="books")
 * @ORM\Entity
 */
class Books
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
     * @var integer
     *
     * @ORM\Column(name="pubyear", type="integer")
     */
    private $pubyear;

    /**
     * @var string
     *
     * @ORM\Column(name="blurb", type="text")
     */
    private $blurb;

    /**
     * @var string
     *
     * @ORM\Column(name="photurl", type="string", length=255)
     */
    private $photurl;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher", type="string", length=255)
     */
    private $publisher;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;


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
     * Set title, pubyear, blurb, photurl, publisher, genre
     *
     * @param string $title
     * @return Books
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
     * Set pubyear
     *
     * @param integer $pubyear
     * @return Books
     */
    public function setPubyear($pubyear)
    {
        $this->pubyear = $pubyear;
    
        return $this;
    }

    /**
     * Get pubyear
     *
     * @return integer
     */
    public function getPubyear()
    {
        return $this->pubyear;
    }

    /**
     * Set blurb
     *
     * @param string $blurb
     * @return Books
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
     * Set photurl
     *
     * @param string $photurl
     * @return Books
     */
    public function setPhoturl($photurl)
    {
        $this->photurl = $photurl;
    
        return $this;
    }

    /**
     * Get photurl
     *
     * @return string 
     */
    public function getPhoturl()
    {
        return $this->photurl;
    }

    /**
     * Set publisher
     *
     * @param string $publisher
     * @return Books
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    
        return $this;
    }

    /**
     * Get publisher
     *
     * @return string 
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Books
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    
        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
