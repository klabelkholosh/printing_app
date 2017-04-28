<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jobroute
 *
 * @ORM\Table(name="jobroute", indexes={@ORM\Index(name="jobroute_pkey", columns={"jobnumber", "sequence"}), @ORM\Index(name="IDX_D82D262383517357", columns={"machinecode"}), @ORM\Index(name="IDX_D82D26231DF44EB8", columns={"jobnumber"})})
 * @ORM\Entity
 */
class Jobroute
{
    /**
     * @var integer
     *
     * @ORM\Column(name="minutes", type="integer", nullable=true)
     */
    private $minutes;

    /**
     * @var string
     *
     * @ORM\Column(name="instruction", type="string", nullable=true)
     */
    private $instruction;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sequence;

    /**
     * @var \AppBundle\Entity\Job
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobnumber", referencedColumnName="jobnumber")
     * })
     */
    private $jobnumber;

    /**
     * @var \AppBundle\Entity\Machine
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Machine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="machinecode", referencedColumnName="machinecode")
     * })
     */
    private $machinecode;



    /**
     * Set minutes
     *
     * @param integer $minutes
     *
     * @return Jobroute
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * Get minutes
     *
     * @return integer
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * Set instruction
     *
     * @param string $instruction
     *
     * @return Jobroute
     */
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;

        return $this;
    }

    /**
     * Get instruction
     *
     * @return string
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return Jobroute
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set jobnumber
     *
     * @param \AppBundle\Entity\Job $jobnumber
     *
     * @return Jobroute
     */
    public function setJobnumber(\AppBundle\Entity\Job $jobnumber)
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
     * Set machinecode
     *
     * @param \AppBundle\Entity\Machine $machinecode
     *
     * @return Jobroute
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
