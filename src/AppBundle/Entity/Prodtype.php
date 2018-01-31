<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prodtype
 *
 * @ORM\Table(name="prodtype")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProdtypeRepository")
 */
class Prodtype
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
     * @ORM\Column(name="typecode", type="string", length=10, unique=true)
     */
    private $typecode;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=40)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=1)
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
     * Set typecode
     *
     * @param string $typecode
     *
     * @return Prodtype
     */
    public function setTypecode($typecode)
    {
        $this->typecode = $typecode;

        return $this;
    }

    /**
     * Get typecode
     *
     * @return string
     */
    public function getTypecode()
    {
        return $this->typecode;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Prodtype
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
     * @return Prodtype
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

