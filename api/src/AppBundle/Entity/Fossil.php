<?php
/**
 * Created by PhpStorm.
 * User: tneier
 * Date: 10/11/15
 * Time: 2:26 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fossil
 *
 * @ORM\Table(name="modernQuarryFossilData")
 * @ORM\Entity
 */
class Fossil
{
  /**
   * @var string
   *
   * @ORM\Column(name="catalogNumber", type="string", length=11)
   */
  protected $catalogNumber;


  /**
   * @var string
   *
   * @ORM\Column(name="image", type="string", length=70)
   */
  protected $image;

  /**
   * @ORM\Column(name="cliffNumber", type="string", length=17)
   */
  protected $cliffNumber;

  /**
   * @ORM\Column(name="taxon", type="string", length=24)
   */
  protected $taxon;

  /**
   * @ORM\Column(name="bone", type="string", length=55)
   */
  protected $bone;

  /**
   * @ORM\Column(name="age", type="string", length=8)
   */
  protected $age;


    /**
     * Set catalogNumber
     *
     * @param string $catalogNumber
     *
     * @return Fossil
     */
    public function setCatalogNumber($catalogNumber)
    {
        $this->catalogNumber = $catalogNumber;

        return $this;
    }

    /**
     * Get catalogNumber
     *
     * @return string
     */
    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Fossil
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set cliffNumber
     *
     * @param string $cliffNumber
     *
     * @return Fossil
     */
    public function setCliffNumber($cliffNumber)
    {
        $this->cliffNumber = $cliffNumber;

        return $this;
    }

    /**
     * Get cliffNumber
     *
     * @return string
     */
    public function getCliffNumber()
    {
        return $this->cliffNumber;
    }

    /**
     * Set taxon
     *
     * @param string $taxon
     *
     * @return Fossil
     */
    public function setTaxon($taxon)
    {
        $this->taxon = $taxon;

        return $this;
    }

    /**
     * Get taxon
     *
     * @return string
     */
    public function getTaxon()
    {
        return $this->taxon;
    }

    /**
     * Set bone
     *
     * @param string $bone
     *
     * @return Fossil
     */
    public function setBone($bone)
    {
        $this->bone = $bone;

        return $this;
    }

    /**
     * Get bone
     *
     * @return string
     */
    public function getBone()
    {
        return $this->bone;
    }

    /**
     * Set age
     *
     * @param string $age
     *
     * @return Fossil
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }
}
