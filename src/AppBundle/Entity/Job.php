<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Job
 * @ApiResource
 *
 * @ORM\Table(name="job", indexes={@ORM\Index(name="IDX_FBD8E0F81D51CBE1", columns={"sonumber"}), @ORM\Index(name="IDX_FBD8E0F8D34A04AD", columns={"product"})})
 * @ORM\Entity
 */
class Job
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterequired", type="date", nullable=true)
     */
    private $daterequired;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="jobnumber", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="job_jobnumber_seq", allocationSize=1, initialValue=1)
     */
    private $jobnumber;

    /**
     * @var \AppBundle\Entity\Salesorders
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Salesorders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sonumber", referencedColumnName="sonumber")
     * })
     */
    private $sonumber;

    /**
     * @var \AppBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product", referencedColumnName="productcode")
     * })
     */
    private $product;



    /**
     * Set daterequired
     *
     * @param \DateTime $daterequired
     *
     * @return Job
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
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Job
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
     * Set status
     *
     * @param string $status
     *
     * @return Job
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
     * Get jobnumber
     *
     * @return integer
     */
    public function getJobnumber()
    {
        return $this->jobnumber;
    }

    /**
     * Set sonumber
     *
     * @param \AppBundle\Entity\Salesorders $sonumber
     *
     * @return Job
     */
    public function setSonumber(\AppBundle\Entity\Salesorders $sonumber = null)
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

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return Job
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
