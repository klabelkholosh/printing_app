<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ApiResource
 * @ORM\Table(name="address")
 * @ORM\Entity
 */
class Address
{
    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=60, nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="string", nullable=true)
     */
    private $detail;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=true)
     */
    private $type;

    /**
     * @var integer 
     *
     * @ORM\Column(name="addressnumber", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="addressnumber", allocationSize=1, initialValue=1)
     */
    public $addressnumber;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Supplier", mappedBy="addressnumber")
     */
    private $suppliercode;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->suppliercode = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Address
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set detail
     *
     * @param string $detail
     *
     * @return Address
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Address
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get addressnumber
     *
     * @return integer
     */
    public function getAddressnumber()
    {
        return $this->addressnumber;
    }

    /**
     * Add suppliercode
     *
     * @param \AppBundle\Entity\Supplier $suppliercode
     *
     * @return Address
     */
    public function addSuppliercode(\AppBundle\Entity\Supplier $suppliercode)
    {
        $this->suppliercode[] = $suppliercode;

        return $this;
    }

    /**
     * Remove suppliercode
     *
     * @param \AppBundle\Entity\Supplier $suppliercode
     */
    public function removeSuppliercode(\AppBundle\Entity\Supplier $suppliercode)
    {
        $this->suppliercode->removeElement($suppliercode);
    }

    /**
     * Get suppliercode
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSuppliercode()
    {
        return $this->suppliercode;
    }
}
