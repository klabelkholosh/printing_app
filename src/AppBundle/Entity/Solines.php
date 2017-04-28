<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solines
 *
 * @ORM\Table(name="solines", indexes={@ORM\Index(name="soline_pkey", columns={"sonumber", "product"}), @ORM\Index(name="IDX_306DD3CC1D51CBE1", columns={"sonumber"})})
 * @ORM\Entity
 */
class Solines
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
     * @ORM\Column(name="priceunit", type="decimal", precision=10, scale=0, nullable=true)
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
     * @ORM\Column(name="product", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $product;

    /**
     * @var \AppBundle\Entity\Salesorders
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Salesorders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sonumber", referencedColumnName="sonumber")
     * })
     */
    private $sonumber;



    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Solines
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
     * @return Solines
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
     * @return Solines
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
     * Set product
     *
     * @param string $product
     *
     * @return Solines
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set sonumber
     *
     * @param \AppBundle\Entity\Salesorders $sonumber
     *
     * @return Solines
     */
    public function setSonumber(\AppBundle\Entity\Salesorders $sonumber)
    {
        $this->sonumber = $sonumber;

        return $this;
    }

    /**
     * Get sonumber
     *
     * @return \AppBundle\Entity\Salesorders
     */
    public function getSonumber()
    {
        return $this->sonumber;
    }
}
