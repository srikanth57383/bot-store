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
    $purpose = $link->real_escape_string($_POST['purpose']);
    $department = $link->real_escape_string($_POST['department']);
    $statement = $link->real_escape_string($_POST['statement']);
    $manager_name = $link->real_escape_string($_POST['manager_name']);
    $date = $link->real_escape_string($_POST['date']);
    
    $category = $link->real_escape_string($_POST['category']);
    $description = $link->real_escape_string($_POST['description']);
    $transport_type= $link->real_escape_string($_POST['transport_type']);
    $tax= $link->real_escape_string($_POST['tax']);
    $food= $link->real_escape_string($_POST['food']);
    $entertainment= $link->real_escape_string($_POST['entertainment']);
    $amount= $link->real_escape_string($_POST['amount']);
    $others= $link->real_escape_string($_POST['others']);
    $authorized_by= $link->real_escape_string($_POST['authorized_by']);
    $designation= $link->real_escape_string($_POST['designation']);
    
    

    
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["attachment"]["name"]);
$file_name = basename($_FILES["attachment"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists


// Check if $uploadOk is set to 0 by an error

  move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file);

  $sql = "INSERT INTO `expense`( `purpose`, `department`, `statement`, `manager_name`,`date`, `category`, `description`, `transport_type`, `tax`, `food`, `entertainment`, `amount`, `others`, `authorized_by`, `designation`,`attachment`) VALUES
  ( '$purpose', '$department', '$statement', '$manager_name','$date', '$category', '$description', '$transport_type', '$tax', '$food', '$entertainment', '$amount', '$others', '$authorized_by', '$designation','$file_name')";
    
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