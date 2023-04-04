<?php


// header("Access-Control-Allow-Origin: *");
// header('Access-Control-Allow-Methods: GET, POST');
// header("Access-Control-Allow-Headers: X-Requested-With");



// $rest_json = file_get_contents("php://input");
// $_POST = json_decode($rest_json, true);
 


// Database Connection
include '../layouts/config.php'; 



// if(isset($_POST['submit']))
// { 
    $id= $link->real_escape_string($_POST['id']);
    // $Branchcode = $link->real_escape_string($_POST['Branchcode']);
    // $CardNumber = $link->real_escape_string($_POST['CardNumber']);
    // $title = $link->real_escape_string($_POST['title']);
    // $ClientFirstName = $link->real_escape_string($_POST['ClientFirstName']);
    // $LastName = $link->real_escape_string($_POST['LastName']);
    // $MothersName = $link->real_escape_string($_POST['MothersName']);
    // $status = $link->real_escape_string($_POST['status']);
    // $gender = $link->real_escape_string($_POST['gender']);
    // $nationality= $link->real_escape_string($_POST['nationality']);
    $Date= $link->real_escape_string($_POST['Date']);
    $Traveltype = $link->real_escape_string($_POST['Traveltype']);
    $TravelDate = $link->real_escape_string($_POST['TravelDate']);
    $PinCode = $link->real_escape_string($_POST['PinCode']);
    $MobilePhone = $link->real_escape_string($_POST['MobilePhone']);
    $EmailId = $link->real_escape_string($_POST['EmailId']);
    $PasportNumber = $link->real_escape_string($_POST['PasportNumber']);
    $PasportExpiryDate = $link->real_escape_string($_POST['PasportExpiryDate']);
    $Placepasportissued = $link->real_escape_string($_POST['Placepasportissued']);
    $ForeignCurrency = $link->real_escape_string($_POST['ForeignCurrency']);
    $AmoutToBebeLoaded = $link->real_escape_string($_POST['AmoutToBebeLoaded']);
    $AmoutLoaded = $link->real_escape_string($_POST['AmoutLoaded']);
    $account_balance= $link->real_escape_string($_POST['account_balance']);
    $card_issue_date= $link->real_escape_string($_POST['card_issue_date']);
    $charges= $link->real_escape_string($_POST['charges']);
    $total_amount= $link->real_escape_string($_POST['total_amount']);
    // $active= $link->real_escape_string($_POST['active']);
  
    $response = array(); 

    $sql= "UPDATE `forex` SET 
    `date`='$Date',
    `traveltype`='$Traveltype',
    `traveldate`='$TravelDate',
    `pincode`='$PinCode',
    `mobilephone`='$MobilePhone',
    `emailid`='$EmailId',
    `pasportnumber`='$PasportNumber',
    `pasportexpirydate`='$PasportExpiryDate',
    `branchnumber`='$Placepasportissued',
    `forigncurrency`='$ForeignCurrency',
    `to_currency`='$AmoutToBebeLoaded',
    `amount_loaded`='$AmoutLoaded',
    `account_balance`='$account_balance',
    `card_issued_date`='$card_issue_date',
    `charges`='$charges',
    `total_amount`='$total_amount',
    `forex_applied`='yes' 
    WHERE `id`='$id'";
     
         
    // $sql = "INSERT INTO `forex`( `branchcode`, `cardnumber`,  `title`,`first _name`, `last_name`, `mother_name`, `status`, `gender`, `nationality`, `date`, `traveltype`, `traveldate`, `pincode`, `mobilephone`, `emailid`,
    //  `pasportnumber`, `pasportexpirydate`, `branchnumber`, `forigncurrency`, `amouttobeload`,`to_currency`,`amount_loaded`, `card_issued_date`, `charges`, `total_amount`) VALUES ('$firstname',
    // ' $lastname',  ' $title','$mobile',' $email','$transferfrom','$transferto ','$branch ',' $Convertingfrom',' $Convertingto','$Amount','$firstnamea',
    // ' $lastnamea','$mobilea',' $emaila','$transferfroma','$transfertoa ','$brancha ',' $Convertingfroma',' $Convertingtoa','$toCurrency','$amountLoaded','$card_issue_date','$charges','$total_amount')";
    // $sql = "INSERT INTO `forex`(`firstname`, `lastname`) VALUES ('$firstname','$lastname')";
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