<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Defaultmaterial
 *@ApiResource
 *
 * @ORM\Table(name="defaultmaterial", uniqueConstraints={@ORM\UniqueConstraint(name="defaultmaterial_pkey", columns={"defmatkey"})}, indexes={@ORM\Index(name="IDX_FA73C5ADFA73C5AD", columns={"defaultmaterial"}), @ORM\Index(name="IDX_FA73C5ADDA517D7D", columns={"productcode"})})
 * @ORM\Entity
 */
class Defaultmaterial
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
     * @var string
     *
     * @ORM\Column(name="defaultqty", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $defaultqty;

    /**
     * @var integer
     *
     * @ORM\Column(name="defmatkey", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="defaultmaterial_defmatkey_seq", allocationSize=1, initialValue=1)
     */
    private $defmatkey;

    /**
     * @var \AppBundle\Entity\Material
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Material")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="defaultmaterial", referencedColumnName="materialcode")
     * })
     */
    private $defaultmaterial;

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
     * @return Defaultmaterial
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
     * @return Defaultmaterial
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
     * Set defaultqty
     *
     * @param string $defaultqty
     *
     * @return Defaultmaterial
     */
    public function setDefaultqty($defaultqty)
    {
        $this->defaultqty = $defaultqty;

        return $this;
    }

    /**
     * Get defaultqty
     *
     * @return string
     */
    public function getDefaultqty()
    {
        return $this->defaultqty;
    }

    /**
     * Get defmatkey
     *
     * @return integer
     */
    public function getDefmatkey()
    {
        return $this->defmatkey;
    }

    /**
     * Set defaultmaterial
     *
     * @param \AppBundle\Entity\Material $defaultmaterial
     *
     * @return Defaultmaterial
     */
    public function setDefaultmaterial(\AppBundle\Entity\Material $defaultmaterial = null)
    {
        $this->defaultmaterial = $defaultmaterial;

        return $this;
    }

    /**
     * Get defaultmaterial
     *
     * @return \AppBundle\Entity\Material
     */
    public function getDefaultmaterial()
    {
        return $this->defaultmaterial;
    }

    /**
     * Set productcode
     *
     * @param \AppBundle\Entity\Product $productcode
     *
     * @return Defaultmaterial
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
