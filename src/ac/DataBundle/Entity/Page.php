<?php

namespace ac\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 */
class Page
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pageTitle;

    /**
     * @var string
     */
    private $pageContent;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $modificationDate;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $pageParent;

    /**
     * @var integer
     */
    private $menuOrder;

    /**
     * @var integer
     */
    private $pageAuthor;

    /**
     * @var string
     */
    private $pageRoute;


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
     * Set pageTitle
     *
     * @param string $pageTitle
     * @return Page
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string 
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set pageContent
     *
     * @param string $pageContent
     * @return Page
     */
    public function setPageContent($pageContent)
    {
        $this->pageContent = $pageContent;

        return $this;
    }

    /**
     * Get pageContent
     *
     * @return string 
     */
    public function getPageContent()
    {
        return $this->pageContent;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Page
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set modificationDate
     *
     * @param \DateTime $modificationDate
     * @return Page
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Get modificationDate
     *
     * @return \DateTime 
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Page
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set pageParent
     *
     * @param integer $pageParent
     * @return Page
     */
    public function setPageParent($pageParent)
    {
        $this->pageParent = $pageParent;

        return $this;
    }

    /**
     * Get pageParent
     *
     * @return integer 
     */
    public function getPageParent()
    {
        return $this->pageParent;
    }

    /**
     * Set menuOrder
     *
     * @param integer $menuOrder
     * @return Page
     */
    public function setMenuOrder($menuOrder)
    {
        $this->menuOrder = $menuOrder;

        return $this;
    }

    /**
     * Get menuOrder
     *
     * @return integer 
     */
    public function getMenuOrder()
    {
        return $this->menuOrder;
    }

    /**
     * Set pageAuthor
     *
     * @param integer $pageAuthor
     * @return Page
     */
    public function setPageAuthor($pageAuthor)
    {
        $this->pageAuthor = $pageAuthor;

        return $this;
    }

    /**
     * Get pageAuthor
     *
     * @return integer 
     */
    public function getPageAuthor()
    {
        return $this->pageAuthor;
    }

    /**
     * Set pageRoute
     *
     * @param string $pageRoute
     * @return Page
     */
    public function setPageRoute($pageRoute)
    {
        $this->pageRoute = $pageRoute;

        return $this;
    }

    /**
     * Get pageRoute
     *
     * @return string 
     */
    public function getPageRoute()
    {
        return $this->pageRoute;
    }
}
