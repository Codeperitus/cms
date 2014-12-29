<?php

namespace ac\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRole
 */
class UserRole
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ac\DataBundle\Entity\User
     */
    private $user;

    /**
     * @var \ac\DataBundle\Entity\Role
     */
    private $role;


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
     * Set user
     *
     * @param \ac\DataBundle\Entity\User $user
     * @return UserRole
     */
    public function setUser(\ac\DataBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ac\DataBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set role
     *
     * @param \ac\DataBundle\Entity\Role $role
     * @return UserRole
     */
    public function setRole(\ac\DataBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \ac\DataBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
    
    public function __toString() {
        return $this->role->getRoleName();
    }
}
