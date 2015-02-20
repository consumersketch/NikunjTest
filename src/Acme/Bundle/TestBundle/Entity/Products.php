<?php

namespace Acme\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//generated entity for products table

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="Acme\Bundle\TestBundle\Entity\ProductsRepository")
 */
class Products
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	/**
     * @var string $productId
     *
     * @ORM\Column(name="product_id", type="string", length=100, nullable=false)
     */
    private $productId;
	
	/**
     * @var string $clientId
     *
     * @ORM\Column(name="client_id", type="string", length=100, nullable=false)
     */
    private $clientId;
	
	/**
     * @var string $productDesc
     *
     * @ORM\Column(name="product_description", type="string", length=255, nullable=false)
     */
    private $productDesc;


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
     * Set productId
     *
     * @param string $productId
     * @return Products
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return string 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set clientId
     *
     * @param string $clientId
     * @return Products
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return string 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set productDesc
     *
     * @param string $productDesc
     * @return Products
     */
    public function setProductDesc($productDesc)
    {
        $this->productDesc = $productDesc;

        return $this;
    }

    /**
     * Get productDesc
     *
     * @return string 
     */
    public function getProductDesc()
    {
        return $this->productDesc;
    }
}
