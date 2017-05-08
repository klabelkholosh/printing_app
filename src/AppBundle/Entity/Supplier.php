<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Supplier
 * @ApiResource
 *
 * @ORM\Table(name="supplier")
 * @ORM\Entity
 */
class Supplier
{
    /**
     * @var string
     *
     * @ORM\Column(name="suppliername", type="string", length=60, nullable=true)
     */
    private $suppliername;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliercode", type="string", length=10)
     * @ORM\Id

     */
    private $suppliercode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Address", inversedBy="suppliercode")
     * @ORM\JoinTable(name="supplieraddress",
     *   joinColumns={
     *     @ORM\JoinColumn(name="suppliercode", referencedColumnName="suppliercode")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="addressnumber", referencedColumnName="addressnumber")
     *   }
     * )
     */
    private $addressnumber;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addressnumber = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set suppliername
     *
     * @param string $suppliername
     *
     * @return Supplier
     */
    public function setSuppliername($suppliername)
    {
        $this->suppliername = $suppliername;

        return $this;
    }

    /**
     * Get suppliername
     *
     * @return string
     */
    public function getSuppliername()
    {
        return $this->suppliername;
    }

    /**
     * Set suppliercode
     *
     * @param string $suppliercode
     *
     * @return Supplier
     */
    public function setSuppliercode($suppliercode)
    {
        $this->suppliercode = $suppliercode;

        return $this;
    }

    /**
     * Get suppliercode
     *
     * @return string
     */
    public function getSuppliercode()
    {
        return $this->suppliercode;
    }

    /**
     * Add addressnumber
     *
     * @param \AppBundle\Entity\Address $addressnumber
     *
     * @return Supplier
     */
    public function addAddressnumber(\AppBundle\Entity\Address $addressnumber)
    {
        $this->addressnumber[] = $addressnumber;

        return $this;
    }

    /**
     * Remove addressnumber
     *
     * @param \AppBundle\Entity\Address $addressnumber
     */
    public function removeAddressnumber(\AppBundle\Entity\Address $addressnumber)
    {
        $this->addressnumber->removeElement($addressnumber);
    }

    /**
     * Get addressnumber
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddressnumber()
    {
        return $this->addressnumber;
    }
}
