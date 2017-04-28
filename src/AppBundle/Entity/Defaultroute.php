<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Defaultroute
 *
 * @ORM\Table(name="defaultroute", indexes={@ORM\Index(name="defaultroute_pkey", columns={"defroutekey"}), @ORM\Index(name="IDX_1A106B64B673354", columns={"defaultmachine"}), @ORM\Index(name="IDX_1A106B64DA517D7D", columns={"productcode"})})
 * @ORM\Entity
 */
class Defaultroute
{
    /**
     * @var string
     *
     * @ORM\Column(name="defaultname", type="string", length=60, nullable=true)
     */
    private $defaultname;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultvalue", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $defaultvalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaultsequence", type="integer", nullable=true)
     */
    private $defaultsequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaultminutes", type="integer", nullable=true)
     */
    private $defaultminutes;

    /**
     * @var integer
     *
     * @ORM\Column(name="defroutekey", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="defaultroute_defroutekey_seq", allocationSize=1, initialValue=1)
     */
    private $defroutekey;

    /**
     * @var \AppBundle\Entity\Machine
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Machine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="defaultmachine", referencedColumnName="machinecode")
     * })
     */
    private $defaultmachine;

    /**
     * @var \AppBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productcode", referencedColumnName="productcode")
     * })
     */
    private $productcode;



    /**
     * Set defaultname
     *
     * @param string $defaultname
     *
     * @return Defaultroute
     */
    public function setDefaultname($defaultname)
    {
        $this->defaultname = $defaultname;

        return $this;
    }

    /**
     * Get defaultname
     *
     * @return string
     */
    public function getDefaultname()
    {
        return $this->defaultname;
    }

    /**
     * Set defaultvalue
     *
     * @param string $defaultvalue
     *
     * @return Defaultroute
     */
    public function setDefaultvalue($defaultvalue)
    {
        $this->defaultvalue = $defaultvalue;

        return $this;
    }

    /**
     * Get defaultvalue
     *
     * @return string
     */
    public function getDefaultvalue()
    {
        return $this->defaultvalue;
    }

    /**
     * Set defaultsequence
     *
     * @param integer $defaultsequence
     *
     * @return Defaultroute
     */
    public function setDefaultsequence($defaultsequence)
    {
        $this->defaultsequence = $defaultsequence;

        return $this;
    }

    /**
     * Get defaultsequence
     *
     * @return integer
     */
    public function getDefaultsequence()
    {
        return $this->defaultsequence;
    }

    /**
     * Set defaultminutes
     *
     * @param integer $defaultminutes
     *
     * @return Defaultroute
     */
    public function setDefaultminutes($defaultminutes)
    {
        $this->defaultminutes = $defaultminutes;

        return $this;
    }

    /**
     * Get defaultminutes
     *
     * @return integer
     */
    public function getDefaultminutes()
    {
        return $this->defaultminutes;
    }

    /**
     * Get defroutekey
     *
     * @return integer
     */
    public function getDefroutekey()
    {
        return $this->defroutekey;
    }

    /**
     * Set defaultmachine
     *
     * @param \AppBundle\Entity\Machine $defaultmachine
     *
     * @return Defaultroute
     */
    public function setDefaultmachine(\AppBundle\Entity\Machine $defaultmachine = null)
    {
        $this->defaultmachine = $defaultmachine;

        return $this;
    }

    /**
     * Get defaultmachine
     *
     * @return \AppBundle\Entity\Machine
     */
    public function getDefaultmachine()
    {
        return $this->defaultmachine;
    }

    /**
     * Set productcode
     *
     * @param \AppBundle\Entity\Product $productcode
     *
     * @return Defaultroute
     */
    public function setProductcode(\AppBundle\Entity\Product $productcode = null)
    {
        $this->productcode = $productcode;

        return $this;
    }

    /**
     * Get productcode
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProductcode()
    {
        return $this->productcode;
    }
}
