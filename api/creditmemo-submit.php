<?php


// header("Access-Control-Allow-Origin: *");
// header('Access-Control-Allow-Methods: GET, POST');
// header("Access-Control-Allow-Headers: X-Requested-With");



// $rest_json = file_get_contents("php://input");
// $_POST = json_decode($rest_json, true);
 


// Database Connection
include '../layouts/config.php'; 

$response = array(); 

// if(isset($_POST['submit']))
// {         
 
    $number = $link->real_escape_string($_POST['number']);
    $date = $link->real_escape_string($_POST['date']);
    $from_company_name= $link->real_escape_string($_POST['from_company_name']);
    $from_company_address = $link->real_escape_string($_POST['from_company_address']);
    $from_company_phone = $link->real_escape_string($_POST['from_company_phone']);
    $from_company_mail= $link->real_escape_string($_POST['comp_mail']);
    $to_customer_name= $link->real_escape_string($_POST['to_customer_name']);
    $to_customer_address = $link->real_escape_string($_POST['to_customer_address']);
    $to_customer_phone = $link->real_escape_string($_POST['to_customer_phone']);
    $to_customer_mail= $link->real_escape_string($_POST['cust_mail']);
    $invoice= $link->real_escape_string($_POST['invoice']);
    $order = $link->real_escape_string($_POST['order']);
    $sales_person = $link->real_escape_string($_POST['sales_person']);
    $payment_term = $link->real_escape_string($_POST['payment_term']);
    $shipping_date = $link->real_escape_string($_POST['shipping_date']);
   
    $authorized_by= $link->real_escape_string($_POST['authorized_by']);
    $designation= $link->real_escape_string($_POST['designation']);
 // $description = $link->real_escape_string($_POST['paymentterm']);
    // $unit_price= $link->real_escape_string($_POST['shippingdate']);    
    // $quantity = $link->real_escape_string($_POST['authby']);
    // $total= $link->real_escape_string($_POST['namedesi']);
    $orderDetails = [];

    $description = $_POST["description"];
    $unitPrice = $_POST["unitprice"];
    $totalAmount = $_POST["total"];
    $quantity = $_POST["quantity"];
    $product = $_POST["product"];
    $tax = $_POST["tax"];
 

foreach($description as $index => $val) {
    $orderDetails[$index]['description'] = $val;
}

foreach($unitPrice as $index => $val) {
    $orderDetails[$index]['unitPrice'] = $val;
}

foreach($totalAmount as $index => $val) {
    $orderDetails[$index]['amount'] = $val;
}

foreach($quantity as $index => $val) {
    $orderDetails[$index]['quantity'] = $val;
}

foreach($product as $index => $val) {
    $orderDetails[$index]['product'] = $val;
}

foreach($tax as $index => $val) {
    $orderDetails[$index]['tax'] = $val;
}
 
$orderDetailsSerialized = serialize($orderDetails);
         
    $sql = "INSERT INTO `creditmemo`(`number`, `date`, `ComingFromCompanyName`, `GoingToCompany_Name`, `ComingFromCompanyAddress`, `GoingToCompanyAddress`, `ComingFromCompanyPhoneNo`, `Going ToCompanyPhoneNo`, `Invoice`, `Order`, `SalesPerson`, `PaymentTerm`, 
    `ShippingDate`, `orderdetails`, `AuthorizedBy`, `Name_Designation`,`comp_mail`, `cust_mail`) VALUES ('$number',' $date','$from_company_name','$to_customer_name ','$from_company_address ',' $to_customer_address',' $from_company_phone','$to_customer_phone','$invoice',
    ' $order','$sales_person',' $payment_term','$shipping_date','$orderDetailsSerialized ','$authorized_by ',' $designation','$from_company_mail','$to_customer_mail')";
    
    $response;
    if($result = $link->query($sql)){ 
        $res = array('success' => true,'message' => 'submitted successfully');        
        array_push($response, $res);
    }
    else{                 
        $res = array('success' => false,'message' => 'something went wrong');                
        array_push($response, $res);
    }
    die(json_encode($response));    
//}
?>