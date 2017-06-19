<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Customer
 *@ApiResource
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="loginemail", type="string", length=60, nullable=true)
     */
    private $loginemail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=20, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="customercode", type="string", length=10, nullable=false)
     * @ORM\Id
     *
     * 
     */
    public $customercode;

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Customer
     */

    public function __construct()
    {
       $this->customercode = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->customercode;
    }

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
     * Set status
     *
     * @param string $status
     *
     * @return Customer
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
     * Set loginemail
     *
     * @param string $loginemail
     *
     * @return Customer
     */
    public function setLoginemail($loginemail)
    {
        $this->loginemail = $loginemail;

        return $this;
    }

    /**
     * Get loginemail
     *
     * @return string
     */
    public function getLoginemail()
    {
        return $this->loginemail;
    } 

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Customer
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }   
 
    /**
     * Set customercode
     *
     * @param string $customercode
     *
     * @return Customer
     */
    public function setCustomercode($customercode)
    {
        $this->customercode = $customercode;

        return $this;
    }

    /**
     * Get customercode
     *
     * @return string
     */
    public function getCustomercode()
    {
        return $this->customercode;
    }


}


