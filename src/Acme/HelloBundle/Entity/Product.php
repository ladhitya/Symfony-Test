<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\HelloBundle\Entity\Product
 *
 * 
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="Acme\HelloBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $keyword
     *
     * @ORM\Column(name="keyword", type="string", length=50)
     */
    private $keyword;

    /**
     * @var string $shortcode
     *
     * @ORM\Column(name="shortcode", type="string", length=20)
     */
    private $shortcode;

    /**
     * @ORM\ManyToOne(targetEntity="CampaignTag", inversedBy="products")
     * @ORM\JoinColumn(name="campaignTag_id", referencedColumnName="id")
     */
    private $category;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set shortcode
     *
     * @param string $shortcode
     */
    public function setShortcode($shortcode)
    {
        $this->shortcode = $shortcode;
    }

    /**
     * Get shortcode
     *
     * @return string 
     */
    public function getShortcode()
    {
        return $this->shortcode;
    }

    /**
     * Set category
     *
     * @param Acme\HelloBundle\Entity\CampaignTag $category
     */
    public function setCategory(\Acme\HelloBundle\Entity\CampaignTag $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return Acme\HelloBundle\Entity\CampaignTag 
     */
    public function getCategory()
    {
        return $this->category;
    }
}