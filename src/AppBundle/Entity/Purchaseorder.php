<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Purchaseorder
 * @ApiResource
 *
 * @ORM\Table(name="purchaseorder", indexes={@ORM\Index(name="IDX_D8BF2BE0B58E5397", columns={"suppliercode"})})
 * @ORM\Entity
 */
class Purchaseorder
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterequired", type="date", nullable=true)
     */
    private $daterequired;

    /**
     * @var integer
     *
     * @ORM\Column(name="ponumber", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="purchaseorder_ponumber_seq", allocationSize=1, initialValue=1)
     */
    private $ponumber;

    /**
     * @var \AppBundle\Entity\Supplier
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Supplier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="suppliercode", referencedColumnName="suppliercode", nullable=true)
     * })
     */
    private $suppliercode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Material", inversedBy="ponumber")
     * @ORM\JoinTable(name="polines",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ponumber", referencedColumnName="ponumber")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="materialcode", referencedColumnName="materialcode")
     *   }
     * )
     */
    private $materialcode;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->materialcode = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /*public function __toString()
    {
        return $this->ponumber;
    }*/

    public function __toString()
    {
        return (string) $this->ponumber;

    }

    /**
     * Set daterequired
     *
     * @param \DateTime $daterequired
     *
     * @return Purchaseorder
     */
    public function setDaterequired($daterequired)
    {
        $this->daterequired = $daterequired;

        return $this;
    }

    /**
     * Get daterequired
     *
     * @return \DateTime
     */
    public function getDaterequired()
    {
        return $this->daterequired;
    }

    /**
     * Set ponumber
     *
     * @param \integer $ponumber
     *
     * @return Purchaseorder
     */
    public function setPonumber($ponumber)
    {
        
        $this->ponumber = $ponumber;

        return $this;
    }

    /**
     * Get ponumber
     *
     * @return integer
     */
    public function getPonumber()
    {
        return $this->ponumber;
    }

    /**
     * Set suppliercode
     *
     * @param \AppBundle\Entity\Supplier $suppliercode
     *
     * @return Purchaseorder
     */
    public function setSuppliercode(\AppBundle\Entity\Supplier $suppliercode = null)
    {

        $this->suppliercode = $suppliercode;

        return $this;
    }

    /**
     * Get suppliercode
     *
     * @return \AppBundle\Entity\Supplier
     */
    public function getSuppliercode()
    {
        return $this->suppliercode;
    }

    /**
     * Add materialcode
     *
     * @param \AppBundle\Entity\Material $materialcode
     *
     * @return Purchaseorder
     */
    public function addMaterialcode(\AppBundle\Entity\Material $materialcode)
    {
        $this->materialcode[] = $materialcode;

        return $this;
    }

    /**
     * Remove materialcode
     *
     * @param \AppBundle\Entity\Material $materialcode
     */
    public function removeMaterialcode(\AppBundle\Entity\Material $materialcode)
    {
        $this->materialcode->removeElement($materialcode);
    }

    /**
     * Get materialcode
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMaterialcode()
    {
        return $this->materialcode;
    }
}
