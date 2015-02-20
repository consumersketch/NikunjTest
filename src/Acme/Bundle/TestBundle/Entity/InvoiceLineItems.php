<?php

namespace Acme\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//generated entity for invoicelineitems table
/**
 * InvoiceLineItems
 *
 * @ORM\Table(name="invoicelineitems")
 * @ORM\Entity(repositoryClass="Acme\Bundle\TestBundle\Entity\InvoiceLineItemsRepository")
 */
class InvoiceLineItems
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
     * @var string $invoiceNum
     *
     * @ORM\Column(name="invoice_num", type="string", length=11, nullable=false)
     */
    private $invoiceNum;
	
	/**
     * @var string $productId
     *
     * @ORM\Column(name="product_id", type="string", length=200, nullable=false)
     */
    private $productId;
	
	/**
     * @var string $qty
     *
     * @ORM\Column(name="qty", type="string", length=100, nullable=false)
     */
    private $qty;
	
	/**
     * @var string $price
     *
     * @ORM\Column(name="price", type="string", length=100, nullable=false)
     */
    private $price;


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
     * Set invoiceNum
     *
     * @param string $invoiceNum
     * @return InvoiceLineItems
     */
    public function setInvoiceNum($invoiceNum)
    {
        $this->invoiceNum = $invoiceNum;

        return $this;
    }

    /**
     * Get invoiceNum
     *
     * @return string 
     */
    public function getInvoiceNum()
    {
        return $this->invoiceNum;
    }

    /**
     * Set productId
     *
     * @param string $productId
     * @return InvoiceLineItems
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
     * Set qty
     *
     * @param string $qty
     * @return InvoiceLineItems
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return string 
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return InvoiceLineItems
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }
}
