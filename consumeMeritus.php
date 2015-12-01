<?php
include "vendor/autoload.php";
$postArray = array
        (
            //Post Parameters
            "TransactionType" => "AddCustomer",
            "MerchantID" => $meritusObj->MerchantID,
            "MerchantKey" => $meritusObj->MerchantKey,
            "CardNumber" => "4111111111111111",
            "CardExpirationDate" => "0115",
            "RoutingNumber" => "123456780",
            "AccountNumber" => "123456",
            "CustomerID" => "Doe",
            "CustomerName" => "John Doe",
            
        );

$meritusObj = new Meritus();
echo $meritusObj->addCustomer($postArray);
$postArray = array (
            //Post Parameters
            "TransactionType" => "AddCustomerCCCharge",
            "MerchantID" => $meritusObj->MerchantID,
            "MerchantKey" => $meritusObj->MerchantKey,
            "TransactionAmount" => "3.44",
            "CustomerID" => "TestCustomerID"            
        );

