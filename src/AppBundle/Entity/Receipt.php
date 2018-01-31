<?php

namespace AppBundle\Entity;

/**
 * Receipt
 */
class Receipt
{
    /**
     * @var string
     */
    private $quantity;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var integer
     */
    private $receiptnumber;

    /**
     * @var \AppBundle\Entity\Material
     */
    private $materialcode;

    /**
     * @var \AppBundle\Entity\Person
     */
    private $person;

    /**
     * @var \AppBundle\Entity\Purchaseorder
     */
    private $ponumber;


    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Receipt
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
     * @return Receipt
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
     * @return Receipt
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
     * @return Receipt
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
     * @return Receipt
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
     * @return Receipt
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

