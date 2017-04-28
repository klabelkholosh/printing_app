<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delivery
 *
 * @ORM\Table(name="delivery", indexes={@ORM\Index(name="delivery_pkey", columns={"deliverynumber"}), @ORM\Index(name="IDX_3781EC1034DCD176", columns={"person"}), @ORM\Index(name="IDX_3781EC101DF44EB8", columns={"jobnumber"})})
 * @ORM\Entity
 */
class Delivery
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
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="deliverynumber", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="delivery_deliverynumber_seq", allocationSize=1, initialValue=1)
     */
    private $deliverynumber;

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
     * @var \AppBundle\Entity\Job
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobnumber", referencedColumnName="jobnumber")
     * })
     */
    private $jobnumber;



    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Delivery
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
     * @return Delivery
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
     * @return Delivery
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
     * Set status
     *
     * @param string $status
     *
     * @return Delivery
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
     * Get deliverynumber
     *
     * @return integer
     */
    public function getDeliverynumber()
    {
        return $this->deliverynumber;
    }

    /**
     * Set person
     *
     * @param \AppBundle\Entity\Person $person
     *
     * @return Delivery
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
     * Set jobnumber
     *
     * @param \AppBundle\Entity\Job $jobnumber
     *
     * @return Delivery
     */
    public function setJobnumber(\AppBundle\Entity\Job $jobnumber = null)
    {
        $this->jobnumber = $jobnumber;

        return $this;
    }

    /**
     * Get jobnumber
     *
     * @return \AppBundle\Entity\Job
     */
    public function getJobnumber()
    {
        return $this->jobnumber;
    }
}
