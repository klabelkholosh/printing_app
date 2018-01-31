<?php

namespace AppBundle\Entity;

/**
 * "time"
 */
class Time
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $starttime;

    /**
     * @var \DateTime
     */
    private $endtime;

    /**
     * @var integer
     */
    private $timenumber;

    /**
     * @var \AppBundle\Entity\Job
     */
    private $jobnumber;

    /**
     * @var \AppBundle\Entity\Person
     */
    private $personcode;

    /**
     * @var \AppBundle\Entity\Machine
     */
    private $machinecode;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return "time"
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
     * Set starttime
     *
     * @param \DateTime $starttime
     *
     * @return "time"
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param \DateTime $endtime
     *
     * @return "time"
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return \DateTime
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Get timenumber
     *
     * @return integer
     */
    public function getTimenumber()
    {
        return $this->timenumber;
    }

    /**
     * Set jobnumber
     *
     * @param \AppBundle\Entity\Job $jobnumber
     *
     * @return "time"
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
     * Set personcode
     *
     * @param \AppBundle\Entity\Person $personcode
     *
     * @return "time"
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

    /**
     * Set machinecode
     *
     * @param \AppBundle\Entity\Machine $machinecode
     *
     * @return "time"
     */
    public function setMachinecode(\AppBundle\Entity\Machine $machinecode = null)
    {
        $this->machinecode = $machinecode;

        return $this;
    }

    /**
     * Get machinecode
     *
     * @return \AppBundle\Entity\Machine
     */
    public function getMachinecode()
    {
        return $this->machinecode;
    }
}

