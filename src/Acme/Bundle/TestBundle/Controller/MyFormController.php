<?php

namespace Acme\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\Bundle\TestBundle\Entity\Clients;
use Acme\Bundle\TestBundle\Entity\Invoices;
use Acme\Bundle\TestBundle\Entity\Products;
use Acme\Bundle\TestBundle\Manager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MyFormController extends Controller
{

	// Controller action to get invoices data listing
	//filters for client can be apply according to client_id values.
	
	/**
     * @Route("/product_invoice", name="product_invoice")
     */
	public function fillClientAction() {

		$clientInvoicesArray = array();
		
		// entity repository call to fetch clients data
			$clients = $this->getDoctrine()->getEntityManager()->getRepository('AcmeTestBundle:Clients')->getAllClients();
			
		return $this->render('default/index.html.twig', array('clients'=>$clients));
		
	}
	
	/**
     * @Route("/product_invoiceajax", name="product_invoiceajax")
     */
	public function displayResultAjaxAction() {
			
		$clientInvoicesArray = array();
		if(isset($_REQUEST['client_id']) && $_REQUEST['client_id'] != ''){
			// entity repository call to fetch clients data
			$clients = $this->getDoctrine()->getEntityManager()->getRepository('AcmeTestBundle:Clients')->getAllClients();
			$clientInvoices = $this->getDoctrine()->getEntityManager()->getRepository('AcmeTestBundle:Invoices')->getAllInvoicesByClients($_REQUEST['client_id'],$_REQUEST['datefilter']);
			$clientInvoicesArray[$_REQUEST['client_id']] = $clientInvoices;
			
			$clientajaxres = '<table border="1"><tr><td>Invoice Num</td><td>Invoice Date</td><td>Product</td><td>Qty</td><td>Price</td><td>Total</td></tr>';
			
			//Create HTML for tabular result
			foreach($clientInvoicesArray as $invoicedata) {
				foreach($invoicedata as $invrow) {
					$clientajaxres .= "<tr><td>".$invrow['invoice_num']."</td>";
					$clientajaxres .= "<td>".$invrow['invoice_date']."</td>";
					$clientajaxres .= "<td>".$invrow['product_description']."</td>";
					$clientajaxres .= "<td>".$invrow['qty']."</td>";
					$clientajaxres .= "<td>".$invrow['price']."</td>";
					$clientajaxres .= "<td>".floatval($invrow['qty'])*floatval($invrow['price'])."</td></tr>";
				}
			}
			
			$clientajaxres .= "</table>";
			
			return new Response($clientajaxres);
		} 
	}
	
	
	/**
     * @Route("/product_invoicefillproduct", name="product_invoicefillproduct")
     */
	public function fillProductAction() {
		
		$clientProductsArray = array();
		if(isset($_REQUEST['client_id']) && $_REQUEST['client_id'] != ''){
			// entity repository call to fetch clients data
			$clients = $this->getDoctrine()->getEntityManager()->getRepository('AcmeTestBundle:Clients')->getAllClients();
			$clientProducts = $this->getDoctrine()->getEntityManager()->getRepository('AcmeTestBundle:Products')->getAllProductsByClients($_REQUEST['client_id']);
			$clientProductsArray[$_REQUEST['client_id']] = $clientProducts;
			
			$productajaxres = '';
			
			//Create HTML for PRODUCT dropdown
			$productajaxres .= '<option value="0">---Select Product---</option>';
			
			foreach($clientProductsArray as $productdata) {
				foreach($productdata as $productrow) {
					$productajaxres .= '<option value="'.$productrow['product_id'].'" >'.$productrow['product_description'].'</option>';
				}
			}
			
			return new Response($productajaxres);
		} 
	}
}
