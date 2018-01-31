<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * groupattributes
 *
 * @ORM\Table(name="groupattributes")
 * @ORM\Entity
 */
class typeattributes
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
     * @ORM\Column(name="materialgroup", type="string", length=10)
     */
    private $typecode;

    /**
     * @var string
     *
     * @ORM\Column(name="attrname", type="string", length=60)
     */
    private $attrname;

    /**
     * @var string
     *
     * @ORM\Column(name="attrvalue", type="string", length=60, nullable=true)
     */
    private $attrvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="attrvalidation", type="string", length=1)
     */
    private $attrvalidation;


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
     * Set materialgroup
     *
     * @param string $materialgroup
     *
     * @return groupattributes
     */
    public function setTypecode($typecode)
    {
        $this->materialgroup = $materialgroup;

        return $this;
    }

    /**
     * Get materialgroup
     *
     * @return string
     */
    public function getTypecode()
    {
        return $this->typecode;
    }

    /**
     * Set attrname
     *
     * @param string $attrname
     *
     * @return groupattributes
     */
    public function setAttrname($attrname)
    {
        $this->attrname = $attrname;

        return $this;
    }

    /**
     * Get attrname
     *
     * @return string
     */
    public function getAttrname()
    {
        return $this->attrname;
    }

    /**
     * Set attrvalue
     *
     * @param string $attrvalue
     *
     * @return groupattributes
     */
    public function setAttrvalue($attrvalue)
    {
        $this->attrvalue = $attrvalue;

        return $this;
    }

    /**
     * Get attrvalue
     *
     * @return string
     */
    public function getAttrvalue()
    {
        return $this->attrvalue;
    }

    /**
     * Set attrvalidation
     *
     * @param string $attrvalidation
     *
     * @return groupattributes
     */
    public function setAttrvalidation($attrvalidation)
    {
        $this->attrvalidation = $attrvalidation;

        return $this;
    }

    /**
     * Get attrvalidation
     *
     * @return string
     */
    public function getAttrvalidation()
    {
        return $this->attrvalidation;
    }
}

