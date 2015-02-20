<?php

namespace Acme\Bundle\TestBundle\Manager;
use Acme\Bundle\TestBundle\Manager;
use Doctrine\ORM\EntityManager;


class Manager
{
	public function __construct(Manager $masterManager)
    {
        $this->masterManager = $masterManager;
    }
	
	public funetion getInvoices(){
		$em = $this->getDoctrine()->getEntityManager();
		$connection = $em->getConnection();
		$statement = $connection->prepare("SELECT * FROM clients;");
		$statement->execute();
		$results = $statement->fetchAll();
	}
	
}