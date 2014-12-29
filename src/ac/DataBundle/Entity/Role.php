<?php

namespace ac\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * Role
 */
class Role implements RoleInterface {
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $roleName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set roleName
     *
     * @param string $roleName
     * @return Role
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * Get roleName
     *
     * @return string 
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * Add users
     *
     * @param \ac\DataBundle\Entity\UserRole $users
     * @return Role
     */
    public function addUser(\ac\DataBundle\Entity\UserRole $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \ac\DataBundle\Entity\UserRole $users
     */
    public function removeUser(\ac\DataBundle\Entity\UserRole $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
    
    public function __toString() {
        return $this->getRoleName();
    }

    public function getRole(){
        return $this->roleName;
    }
}
