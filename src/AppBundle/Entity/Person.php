<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Person
 * @ApiResource
 *
 * @ORM\Table(name="person")
 * @ORM\Entity
 */
class Person
{
  
    /**
     * @var string
     *
     * @ORM\Column(name="personcode", type="string", length=20)
     * @ORM\Id
     */
    private $personcode;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=60, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fingerprint", type="blob", nullable=true)
     */
    private $fingerprint;



     /**
     * Set personcode
     *
     * @param string $personcode
     *
     * @return Person
     */
    public function setPersoncode($personcode)
    {
        $this->personcode = $personcode;

        return $this;
    }

    /**
     * Get personcode
     *
     * @return string
     */
    public function getPersoncode()
    {
        return $this->personcode;
    }   


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Person
     */
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
     * Set email
     *
     * @param string $email
     *
     * @return Person
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Person
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fingerprint
     *
     * @param string $fingerprint
     *
     * @return Person
     */
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;

        return $this;
    }

    /**
     * Get fingerprint
     *
     * @return string
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }


}
