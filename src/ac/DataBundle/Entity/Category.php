<?php

namespace ac\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $categoryTitle;

    /**
     * @var boolean
     */
    private $isActive;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $posts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set categoryTitle
     *
     * @param string $categoryTitle
     * @return Category
     */
    public function setCategoryTitle($categoryTitle)
    {
        $this->categoryTitle = $categoryTitle;

        return $this;
    }

    /**
     * Get categoryTitle
     *
     * @return string 
     */
    public function getCategoryTitle()
    {
        return $this->categoryTitle;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Category
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
     * Add posts
     *
     * @param \ac\DataBundle\Entity\Post $posts
     * @return Category
     */
    public function addPost(\ac\DataBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;

        return $this;
    }

    /**
     * Remove posts
     *
     * @param \ac\DataBundle\Entity\Post $posts
     */
    public function removePost(\ac\DataBundle\Entity\Post $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
