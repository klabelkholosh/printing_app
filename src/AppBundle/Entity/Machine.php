<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Machine
 *
 * @ORM\Table(name="machine")
 * @ORM\Entity
 */
class Machine
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=60, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="hourlyrate", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $hourlyrate;

    /**
     * @var string
     *
     * @ORM\Column(name="machinecode", type="string", length=20)
     * @ORM\Id
     */
    private $machinecode;



    /**
     * Set description
     *
     * @param string $description
     *
     * @return Machine
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
     * Set hourlyrate
     *
     * @param string $hourlyrate
     *
     * @return Machine
     */
    public function setHourlyrate($hourlyrate)
    {
        $this->hourlyrate = $hourlyrate;

        return $this;
    }

    /**
     * Get hourlyrate
     *
     * @return string
     */
    public function getHourlyrate()
    {
        return $this->hourlyrate;
    }

    /**
     * Set machinecode
     *
     * @param string $machinecode
     *
     * @return Machine
     */
    public function setMachinecode($machinecode)
    {
        $this->machinecode = $machinecode;

        return $this;
    }

    /**
     * Get machinecode
     *
     * @return string
     */
    public function getMachinecode()
    {
        return $this->machinecode;
    }
}
