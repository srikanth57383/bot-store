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
    $rowId = $link->real_escape_string($_POST['id']);
    

     
         
    $sql = "DELETE FROM `internal_expense` WHERE id='$rowId' ";
     
    // $sql = "INSERT INTO `forex`(`firstname`, `lastname`) VALUES ('$firstname','$lastname')";
    $response;
    if($result = $link->query($sql)){ 
        $res = array('success' => true,'message' => 'Deleted successfully');        
        array_push($response, $res);
    }
    else{                 
        $res = array('success' => false,'message' => 'something went wrong');                
        array_push($response, $res);
    }
    die(json_encode($sql));    
//}
?>