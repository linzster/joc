<?php

namespace Test\PublicationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poems
 *
 * @ORM\Table(name="poems")
 * @ORM\Entity
 */
class Poems
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
     * @ORM\Column(name="journal", type="string", length=255)
     */
    private $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="pubyear", type="string", length=255)
     */
    private $pubyear;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


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
     * @return Poems
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
     * Set journal
     *
     * @param string $journal
     * @return Poems
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
    
        return $this;
    }

    /**
     * Get journal
     *
     * @return string 
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * Set pubyear
     *
     * @param string $pubyear
     * @return Poems
     */
    public function setPubyear($pubyear)
    {
        $this->pubyear = $pubyear;
    
        return $this;
    }

    /**
     * Get pubyear
     *
     * @return string 
     */
    public function getPubyear()
    {
        return $this->pubyear;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Poems
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
}
