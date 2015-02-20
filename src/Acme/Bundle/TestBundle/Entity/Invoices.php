<?php

namespace Acme\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//generated entity for invoices table
/**
 * Invoices
 *
 * @ORM\Table(name="invoices")
 * @ORM\Entity(repositoryClass="Acme\Bundle\TestBundle\Entity\InvoicesRepository")
 */
class Invoices
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
     * @var string $invoiceDate
     *
     * @ORM\Column(name="invoice_date", type="string", length=200, nullable=false)
     */
    private $invoiceDate;
	
	/**
     * @var string $clientId
     *
     * @ORM\Column(name="client_id", type="string", length=100, nullable=false)
     */
    private $clientId;
	
	/**
     * @var string $invoiceNum
     *
     * @ORM\Column(name="invoice_num", type="string", length=11, nullable=false)
     */
    private $invoiceNum;


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
     * Set invoiceDate
     *
     * @param string $invoiceDate
     * @return Invoices
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * Get invoiceDate
     *
     * @return string 
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set clientId
     *
     * @param string $clientId
     * @return Invoices
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
     * Set invoiceNum
     *
     * @param string $invoiceNum
     * @return Invoices
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
}
