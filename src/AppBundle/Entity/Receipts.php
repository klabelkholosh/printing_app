<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Receipts
 * @ApiResource
 *
 * @ORM\Table(name="receipts", indexes={@ORM\Index(name="receipt_pkey", columns={"receiptnumber"}), @ORM\Index(name="IDX_1DEBE3A28C443594", columns={"materialcode"}), @ORM\Index(name="IDX_1DEBE3A234DCD176", columns={"person"}), @ORM\Index(name="IDX_1DEBE3A293DECC02", columns={"ponumber"})})
 * @ORM\Entity
 */
class Receipts
{
    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="time", nullable=true)
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="receiptnumber", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="receipts_receiptnumber_seq", allocationSize=1, initialValue=1)
     */
    private $receiptnumber;

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
     * @var \AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person", referencedColumnName="personcode")
     * })
     */
    private $person;

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
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Receipts
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Receipts
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return Receipts
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Get receiptnumber
     *
     * @return integer
     */
    public function getReceiptnumber()
    {
        return $this->receiptnumber;
    }

    /**
     * Set materialcode
     *
     * @param \AppBundle\Entity\Material $materialcode
     *
     * @return Receipts
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
     * Set person
     *
     * @param \AppBundle\Entity\Person $person
     *
     * @return Receipts
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

    /**
     * Set ponumber
     *
     * @param \AppBundle\Entity\Purchaseorder $ponumber
     *
     * @return Receipts
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
}
