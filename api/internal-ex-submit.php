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
    $from_date = $link->real_escape_string($_POST['from_date']);
    $to_date = $link->real_escape_string($_POST['to_date']);
    $utility = $link->real_escape_string($_POST['utility']);
    $rent = $link->real_escape_string($_POST['rent']);
    $travel = $link->real_escape_string($_POST['travel']);
    
    $emp_loan = $link->real_escape_string($_POST['emp_loan']);
    $others = $link->real_escape_string($_POST['others']);
    $amount= $link->real_escape_string($_POST['amount']);
    $maintence= $link->real_escape_string($_POST['maintence']);
    $salary= $link->real_escape_string($_POST['salary']);
    $medical= $link->real_escape_string($_POST['medical']);
    $emp_benefit= $link->real_escape_string($_POST['emp_benefit']);
    // $note= $link->real_escape_string($_POST['note']);
    
    
    

    
// $target_dir = "../uploads/";
// $target_file = $target_dir . basename($_FILES["attachment"]["name"]);
// $file_name = basename($_FILES["attachment"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists


// Check if $uploadOk is set to 0 by an error

//   move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file);

  $sql = "INSERT INTO `internal_expense`( `from_date`, `to_date`, `utility`, `rent`, `travel`, `emp_loan`, `others`, `amount`, `maintence`, `salary`, `medical`, `emp_benefit`) VALUES
  ( '$from_date', '$to_date', '$utility', '$rent','$travel', '$emp_loan', '$others', '$amount', '$maintence', '$salary', '$medical', '$emp_benefit')";
    
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

?>