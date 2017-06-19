<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Psr\Log\LoggerInterface;
use Symfony\Component\Validator\Constraints as Assert;

/*
test
*/

/**
 * Material
 *
 * @ApiResource
 * @ORM\Table(name="material", indexes={@ORM\Index(name="IDX_7CBE7595385CD15D", columns={"matgroup"})})
 * @ORM\Entity
 */
class Material
{
    private $logger;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="stockunit", type="string", length=10, nullable=true)
     */
    private $stockunit;

    /**
     * @var string
     *
     * @ORM\Column(name="priceunit", type="string", length=10, nullable=true)
     */
    private $priceunit;

    /**
     * @var string
     *
     * @ORM\Column(name="minimumstock", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $minimumstock;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="materialcode", type="string", length=40)
     * @ORM\Id
     * 
     */
    public $materialcode;

    /**
     * @var AppBundle\Entity\Matgroup
     *
     * @Assert\Count(min="1", max="1")
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Matgroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matgroup", referencedColumnName="groupcode")
     * })
     */
    private $matgroup;




  
    public function __toString()
    {
        return $this->materialcode;
    }


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Material
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
     * Set type
     *
     * @param string $type
     *
     * @return Material
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
     * Set stockunit
     *
     * @param string $stockunit
     *
     * @return Material
     */
    public function setStockunit($stockunit)
    {
        $this->stockunit = $stockunit;

        return $this;
    }

    /**
     * Get stockunit
     *
     * @return string
     */
    public function getStockunit()
    {
        return $this->stockunit;
    }

    /**
     * Set priceunit
     *
     * @param string $priceunit
     *
     * @return Material
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
     * Set minimumstock
     *
     * @param string $minimumstock
     *
     * @return Material
     */
    public function setMinimumstock($minimumstock)
    {
        $this->minimumstock = $minimumstock;

        return $this;
    }

    /**
     * Get minimumstock
     *
     * @return string
     */
    public function getMinimumstock()
    {
        return $this->minimumstock;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Material
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
     * Set materialcode
     *
     * @param string $materialcode
     *
     * @return Material
     */
    public function setMaterialcode($materialcode)
    {
        $this->materialcode = $materialcode;

        return $this;
    }

    /**
     * Get materialcode
     *
     * @return string
     */
    public function getMaterialcode()
    {
        return $this->materialcode;
    }

    /**
     * Set matgroup
     *
     * @param \AppBundle\Entity\Matgroup $matgroup
     *
     * @return Material
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
