<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poline
 *
 * @ORM\Table(name="poline", uniqueConstraints={@ORM\UniqueConstraint(name="poline_person_key", columns={"person"})}, indexes={@ORM\Index(name="poline_pkey", columns={"ponumber", "materialcode"}), @ORM\Index(name="IDX_51D227148C443594", columns={"materialcode"}), @ORM\Index(name="IDX_51D2271493DECC02", columns={"ponumber"})})
 * @ORM\Entity
 */
class Poline
{
    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="priceunit", type="string", length=10, nullable=true)
     */
    private $priceunit;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="stkunitconv", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $stkunitconv;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="poline_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Material
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Material")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materialcode", referencedColumnName="materialcode")
     * })
     */
    private $materialcode;

    /**
     * @var \AppBundle\Entity\Purchaseorder
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Purchaseorder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ponumber", referencedColumnName="ponumber")
     * })
     */
    private $ponumber;

    /**
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person", referencedColumnName="personcode")
     * })
     */
    private $person;



    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Poline
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set priceunit
     *
     * @param string $priceunit
     *
     * @return Poline
     */
    public function setPriceunit($priceunit)
    {
        $this->priceunit = $priceunit;

        return $this;
    }

    /**
     * Get priceunit
     *
     * @return string
     */
    public function getPriceunit()
    {
        return $this->priceunit;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Poline
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set stkunitconv
     *
     * @param string $stkunitconv
     *
     * @return Poline
     */
    public function setStkunitconv($stkunitconv)
    {
        $this->stkunitconv = $stkunitconv;

        return $this;
    }

    /**
     * Get stkunitconv
     *
     * @return string
     */
    public function getStkunitconv()
    {
        return $this->stkunitconv;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Poline
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set materialcode
     *
     * @param \AppBundle\Entity\Material $materialcode
     *
     * @return Poline
     */
    public function setMaterialcode(\AppBundle\Entity\Material $materialcode = null)
    {
        $this->materialcode = $materialcode;

        return $this;
    }

    /**
     * Get materialcode
     *
     * @return \AppBundle\Entity\Material
     */
    public function getMaterialcode()
    {
        return $this->materialcode;
    }

    /**
     * Set ponumber
     *
     * @param \AppBundle\Entity\Purchaseorder $ponumber
     *
     * @return Poline
     */
    public function setPonumber(\AppBundle\Entity\Purchaseorder $ponumber = null)
    {
        $this->ponumber = $ponumber;

        return $this;
    }

    /**
     * Get ponumber
     *
     * @return \AppBundle\Entity\Purchaseorder
     */
    public function getPonumber()
    {
        return $this->ponumber;
    }

    /**
     * Set person
     *
     * @param \AppBundle\Entity\Person $person
     *
     * @return Poline
     */
    public function setPerson(\AppBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \AppBundle\Entity\Person
     */
    public function getPerson()
    {
        return $this->person;
    }
}