<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Custaddress
 *@ApiResource
 *
 * @ORM\Table(name="custaddress", indexes={@ORM\Index(name="custaddress_pkey", columns={"customercode", "addressnumber"}), @ORM\Index(name="IDX_C3C7DF8C758D7794", columns={"customercode"})})
 * @ORM\Entity
 */
class Custaddress
{
    /**
     * @var \AppBundle\Entity\Address
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addressnumber", referencedColumnName="addressnumber")
     * })
     */
    public $addressnumber;

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customercode", referencedColumnName="customercode")
     * })
     * 
     */
    private $customercode;

    public function __construct()
    {
       $this->customercode = new ArrayCollection();
    }

   public function __toString()
    {
        return $this->addressnumber;
    }


    /**
     * Set addressnumber
     *
     * @param \AppBundle\Entity\Address $addressnumber
     *
     * @return Custaddress
     */
    public function setAddressnumber(\AppBundle\Entity\Address $addressnumber)
    {
        $this->addressnumber = $addressnumber;

        return $this;
    }

    /**
     * Get addressnumber
     *
     * @return \AppBundle\Entity\Address
     */
    public function getAddressnumber()
    {
        return $this->addressnumber;
    }

    /**
     * Set customercode
     *
     * @param \AppBundle\Entity\Customer $customercode
     *
     * @return Custaddress
     */
    public function setCustomercode(\AppBundle\Entity\Customer $customercode = null)
    {
        
        $this->customercode = $customercode;

        return $this;
    }

    /**
     * Get customercode
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomercode()
    {
        return $this->customercode;
    }
}
