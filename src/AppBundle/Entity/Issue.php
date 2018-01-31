<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Issue
 * @ApiResource
 *
 * @ORM\Table(name="issue", indexes={@ORM\Index(name="issue_pkey", columns={"issuenumber"}), @ORM\Index(name="IDX_12AD233E1DF44EB8", columns={"jobnumber"}), @ORM\Index(name="IDX_12AD233E8C443594", columns={"materialcode"}), @ORM\Index(name="IDX_12AD233EB933EE79", columns={"personcode"})})
 * @ORM\Entity
 */
class Issue
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
     * @ORM\Column(name="issuenumber", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="issue_issuenumber_seq", allocationSize=1, initialValue=1)
     */
    private $issuenumber;

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
     *   @ORM\JoinColumn(name="personcode", referencedColumnName="personcode")
     * })
     */
    private $personcode;



    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Issue
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
     * @return Issue
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
     * @return Issue
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
     * Get issuenumber
     *
     * @return integer
     */
    public function getIssuenumber()
    {
        return $this->issuenumber;
    }

    /**
     * Set jobnumber
     *
     * @param \AppBundle\Entity\Job $jobnumber
     *
     * @return Issue
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

    /**
     * Set materialcode
     *
     * @param \AppBundle\Entity\Material $materialcode
     *
     * @return Issue
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
     * Set personcode
     *
     * @param \AppBundle\Entity\Person $personcode
     *
     * @return Issue
     */
    public function setPersoncode(\AppBundle\Entity\Person $personcode = null)
    {
        $this->personcode = $personcode;

        return $this;
    }

    /**
     * Get personcode
     *
     * @return \AppBundle\Entity\Person
     */
    public function getPersoncode()
    {
        return $this->personcode;
    }
}
