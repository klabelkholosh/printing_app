<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Product
 * @ApiResource
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="IDX_D34A04AD385CD15D", columns={"matgroup"})})
 * @ORM\Entity
 */
class Product
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="priceunit", type="string", length=20, nullable=true)
     */
    private $priceunit;

    /**
     * @var string
     *
     * @ORM\Column(name="productcode", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_productcode_seq", allocationSize=1, initialValue=1)
     */
    private $productcode;

    /**
     * @var \AppBundle\Entity\Matgroup
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Matgroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matgroup", referencedColumnName="groupcode")
     * })
     */
    private $matgroup;



    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set priceunit
     *
     * @param string $priceunit
     *
     * @return Product
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
     * Get productcode
     *
     * @return string
     */
    public function getProductcode()
    {
        return $this->productcode;
    }

    /**
     * Set matgroup
     *
     * @param \AppBundle\Entity\Matgroup $matgroup
     *
     * @return Product
     */
    public function setMatgroup(\AppBundle\Entity\Matgroup $matgroup = null)
    {
        $this->matgroup = $matgroup;

        return $this;
    }

    /**
     * Get matgroup
     *
     * @return \AppBundle\Entity\Matgroup
     */
    public function getMatgroup()
    {
        return $this->matgroup;
    }
}
