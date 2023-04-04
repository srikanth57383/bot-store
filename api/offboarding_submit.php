<?php
// header("Access-Control-Allow-Origin: *");
// header('Access-Control-Allow-Methods: GET, POST');
// header("Access-Control-Allow-Headers: X-Requested-With");


// $rest_json = file_get_contents("php://input");
// $_POST = json_decode($rest_json, true);

 // Database Connection
include '../layouts/config.php'; 

$reasonforresignation = $link->real_escape_string($_POST['reasonforresignation']);
$lastworkingday = $link->real_escape_string($_POST['lastworkingday']);
$plansafterleaving = $link->real_escape_string($_POST['plansafterleaving']);
$employee_id = $link->real_escape_string($_POST['employee_id']);

$acknowledge =isset($_POST['acknowledge']) ? 'yes' : 'no';
$conduct = isset($_POST['conduct']) ? 'yes' :'no';
$hand = isset($_POST['hand']) ? 'yes' :'no';
$laptop = isset($_POST['laptop']) ? 'yes' :'no';
$access = isset($_POST['access']) ? 'yes' :'no';
$pay = isset($_POST['pay']) ? 'yes' :'no';
$redirect = isset($_POST['redirect']) ? 'yes' :'no';
$retention = isset($_POST['retention']) ? 'yes' :'no';
$benefits = isset($_POST['benefits']) ? 'yes' :'no';
$loan = isset($_POST['loan']) ? 'yes' :'no';
$deductions = isset($_POST['deductions']) ? 'yes' :'no';
$paycheck = isset($_POST['paycheck']) ? 'yes' :'no';
$replacement = isset($_POST['replacement']) ? 'yes' :'no';



 
$response = array(); 


 //move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
 

  $sql = "UPDATE `on_boarding` SET 
 `acknowledge`='$acknowledge',
 `conduct`='$conduct',
 `hand`='$hand',
  `laptop`='$laptop',
  `access`='$access',
  `pay`='$pay',
  `redirect`='$redirect',
  `retention`='$retention',
  `benefits`='$benefits',
  `loan`='$loan',
  `deductions`='$deductions',
  `paycheck`='$paycheck',
  `date`='$lastworkingday',
  `plans_leaving`='$plansafterleaving',
  `reason_leaving`='$reasonforresignation',
  `offboarded`='yes',
  `replacement`='$replacement' 
  WHERE  `emp_id`='$employee_id' ";
    
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