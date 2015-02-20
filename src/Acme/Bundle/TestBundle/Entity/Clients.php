<?php

namespace Acme\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//generated entity for clients table

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity(repositoryClass="Acme\Bundle\TestBundle\Entity\ClientsRepository")
 */
class Clients
{
    /**
     * @var integer
     *
     * @ORM\Column(name="client_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $clientId;
	
	/**
     * @var string $clientName
     *
     * @ORM\Column(name="client_name", type="string", length=200, nullable=false)
     */
    private $clientName;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getClientId()
    {
        return $this->clientId;
    }


    /**
     * Set clientName
     *
     * @param string $clientName
     * @return Clients
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Get clientName
     *
     * @return string 
     */
    public function getClientName()
    {
        return $this->clientName;
    }
}
