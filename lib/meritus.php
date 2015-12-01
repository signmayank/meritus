<?php
class Meritus{
	private $serviceURL = "https://webservice.paymentxp.com/wh/webhost.aspx";
	
	public $postString = '';
	
	const TRANSACTIONADDCUSTOMER = "AddCustomer";
	const TRANSACTIONCUSTOMERCHARGE = "AddCustomerCCCharge";
	const MERCHANTKEY = "10012";
	const MERCHANTID = "C22A63EE-2E7A-4ACE-96AC-0958DC8D953F";
	
	public function addCustomer($postArray) {
		$this->postString = $this->createPostString($postArray);
		echo $this->execute();
	}
	
	public function chargeCustomer($postArray) {
		
		$this->postString = $this->createPostString($postArray);
		echo $this->execute();
	}
	
	private function execute() {
		$request = curl_init($this->serviceURL); // Initiate
        curl_setopt($request, CURLOPT_HEADER, 0);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($request, CURLOPT_POSTFIELDS, $this->postString); //HTTP POST
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);
        $post_response = curl_exec($request); // Execute
        curl_close ($request); // Close

        //Write reponse
        return $post_response;
	}
	
	private function createPostString($postArray) {
		$postString = "";
        foreach( $postArray as $key => $value )
        { 
            $postString .= "$key=" . urlencode( $value ) . "&"; 
        }
        
		$this->postString = rtrim( $postString, "& " );		
	}
	

}