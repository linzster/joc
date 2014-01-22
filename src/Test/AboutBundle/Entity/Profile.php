<?php

namespace Test\AboutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Profile
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
     * @ORM\Column(name="newsItem", type="text")
     */
    private $newsItem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="text")
     */
    private $bio;


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
     * Set newsItem
     *
     * @param string $newsItem
     * @return Profile
     */
    public function setNewsItem($newsItem)
    {
        $this->newsItem = $newsItem;
    
        return $this;
    }

    /**
     * Get newsItem
     *
     * @return string 
     */
    public function getNewsItem()
    {
        return $this->newsItem;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Profile
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return Profile
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    
        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }
}
