<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Polines
 *
 * @ORM\Table(name="polines", indexes={@ORM\Index(name="poline_pkey", columns={"ponumber", "materialcode"}), @ORM\Index(name="IDX_185C9518C443594", columns={"materialcode"})})
 * @ORM\Entity
 */
class Polines
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
     * @var string
     *
     * @ORM\Column(name="person", type="string", length=20, nullable=true)
     */
    private $person;

    /**
     * @var \AppBundle\Entity\Purchaseorder
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Purchaseorder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ponumber", referencedColumnName="ponumber")
     * })
     */
    private $ponumber;

    /**
     * @var \AppBundle\Entity\Material
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Material")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materialcode", referencedColumnName="materialcode")
     * })
     */
    private $materialcode;

    public function __construct()
    {
        $this->materialcode = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Polines
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
     * @return Polines
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
     * @return Polines
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
     * @return Polines
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
     * @return Polines
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
     * Set person
     *
     * @param string $person
     *
     * @return Polines
     */
    public function setPerson($person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return string
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set ponumber
     *
     * @param \AppBundle\Entity\Purchaseorder $ponumber
     *
     * @return Polines
     */
    public function setPonumber(\AppBundle\Entity\Purchaseorder $ponumber)
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
     * Set materialcode
     *
     * @param \AppBundle\Entity\Material $materialcode
     *
     * @return Polines
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
}
