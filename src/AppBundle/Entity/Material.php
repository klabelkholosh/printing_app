<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Psr\Log\LoggerInterface;

/*
test
*/

/**
 * Material
 *
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
    private $materialcode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Matgroup", inversedBy="groupcode")

     */
    private $matgroup;



    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Purchaseorder", mappedBy="materialcode")
     */
    private $ponumber;

    /**
     * Constructor
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->ponumber = new \Doctrine\Common\Collections\ArrayCollection();
        $this->matgroup = new \Doctrine\Common\Collections\ArrayCollection();
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
    public function setMatgroup(\AppBundle\Entity\Matgroup $matgroup)
    {
        $this->logger->info($matgroup);
        $this->matgroup[] = $matgroup;

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

    /**
     * Add ponumber
     *
     * @param \AppBundle\Entity\Purchaseorder $ponumber
     *
     * @return Material
     */
    public function addPonumber(\AppBundle\Entity\Purchaseorder $ponumber)
    {
        $this->ponumber[] = $ponumber;

        return $this;
    }

    /**
     * Remove ponumber
     *
     * @param \AppBundle\Entity\Purchaseorder $ponumber
     */
    public function removePonumber(\AppBundle\Entity\Purchaseorder $ponumber)
    {
        $this->ponumber->removeElement($ponumber);
    }

    /**
     * Get ponumber
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPonumber()
    {
        return $this->ponumber;
    }
}
