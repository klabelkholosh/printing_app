<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matgroup
 *
 * @ORM\Table(name="matgroup")
 * @ORM\Entity
 */
class Matgroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=40, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="groupcode", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="matgroup_groupcode_seq", allocationSize=1, initialValue=1)
     */
    private $groupcode;



    /**
     * Set description
     *
     * @param string $description
     *
     * @return Matgroup
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
     * Get groupcode
     *
     * @return string
     */
    public function getGroupcode()
    {
        return $this->groupcode;
    }

    public function __toString()
    {
        return $this->matgroup;
    }
}
