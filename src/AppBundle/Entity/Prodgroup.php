<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prodgroup
 *
 * @ORM\Table(name="prodgroup")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProdgroupRepository")
 */
class Prodgroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Groupcode", type="string", length=10, unique=true)
     */
    private $groupcode;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=40)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=1)
     */
    private $type;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set groupcode
     *
     * @param string $groupcode
     *
     * @return Prodgroup
     */
    public function setGroupcode($groupcode)
    {
        $this->groupcode = $groupcode;

        return $this;
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Prodgroup
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
     * Set type
     *
     * @param string $type
     *
     * @return Prodgroup
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

