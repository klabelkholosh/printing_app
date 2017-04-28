<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salesorders
 *
 * @ORM\Table(name="salesorders", indexes={@ORM\Index(name="IDX_9953A0C4758D7794", columns={"customercode"})})
 * @ORM\Entity
 */
class Salesorders
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="requireddate", type="date", nullable=true)
     */
    private $requireddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="sonumber", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="salesorders_sonumber_seq", allocationSize=1, initialValue=1)
     */
    private $sonumber;

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customercode", referencedColumnName="customercode")
     * })
     */
    private $customercode;



    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Salesorders
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
     * Set requireddate
     *
     * @param \DateTime $requireddate
     *
     * @return Salesorders
     */
    public function setRequireddate($requireddate)
    {
        $this->requireddate = $requireddate;

        return $this;
    }

    /**
     * Get requireddate
     *
     * @return \DateTime
     */
    public function getRequireddate()
    {
        return $this->requireddate;
    }

    /**
     * Get sonumber
     *
     * @return integer
     */
    public function getSonumber()
    {
        return $this->sonumber;
    }

    /**
     * Set customercode
     *
     * @param \AppBundle\Entity\Customer $customercode
     *
     * @return Salesorders
     */
    public function setCustomercode(\AppBundle\Entity\Customer $customercode)
    {
        $this->customercode = $customercode;

        return $this;
    }

    /**
     * Get customercode
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomercode()
    {
        return $this->customercode;
    }
}
