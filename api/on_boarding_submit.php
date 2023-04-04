<?php


// header("Access-Control-Allow-Origin: *");
// header('Access-Control-Allow-Methods: GET, POST');
// header("Access-Control-Allow-Headers: X-Requested-With");



// $rest_json = file_get_contents("php://input");
// $_POST = json_decode($rest_json, true);
 


// Database Connection
include '../layouts/config.php'; 
 
$response = array(); 

$education = [];

$educationName = $_POST["education_name"];
$collegeName = $_POST["education_college"];
$universityName = $_POST["education_university"];
$passYear = $_POST["education_year"];
$grade = $_POST["education_grade"];

foreach($educationName as $index => $val) {
    $education[$index]['educationName'] = $val;
}

foreach($collegeName as $index => $val) {
    $education[$index]['collegeName'] = $val;
}

foreach($universityName as $index => $val) {
    $education[$index]['universityName'] = $val;
}

foreach($passYear as $index => $val) {
    $education[$index]['passYear'] = $val;
}

foreach($grade as $index => $val) {
    $education[$index]['grade'] = $val;
}

$service = [];

$serviceOrganization = $_POST["service_organization"];
$serviceDesignation = $_POST["service_designation"];
$serviceDept = $_POST["service_dept"];
$serviceFrom = $_POST["service_from"];
$serviceTo = $_POST["service_to"];
$serviceTotalSalary = $_POST["service_total_salary"];
$serviceInHand = $_POST["service_in_hand"];


foreach($serviceOrganization as $index => $val) {
    $service[$index]['serviceOrganization'] = $val;
}

foreach($serviceDesignation as $index => $val) {
    $service[$index]['serviceDesignation'] = $val;
}

foreach($serviceDept as $index => $val) {
    $service[$index]['serviceDept'] = $val;
}

foreach($serviceFrom as $index => $val) {
    $service[$index]['serviceFrom'] = $val;
}

foreach($serviceTo as $index => $val) {
    $service[$index]['serviceTo'] = $val;
}
     
foreach($serviceTotalSalary as $index => $val) {
    $service[$index]['serviceTotalSalary'] = $val;
}

foreach($serviceInHand as $index => $val) {
    $service[$index]['serviceInHand'] = $val;
}

$family = [];

$familyName = $_POST["fam_mmber_name"];
$familyRelation= $_POST["fam_mmber_relation"];
$familyMoblie = $_POST["fam_mmber_mobile"];


foreach($familyName as $index => $val) {
    $family[$index]['familyname'] = $val;
}

foreach($familyRelation as $index => $val) {
    $family[$index]['familyrelation'] = $val;
}

foreach($familyMoblie as $index => $val) {
    $family[$index]['familymoblie'] = $val;
}



// if(isset($_POST['submit']))
// {         
$full_name = $link->real_escape_string($_POST['full_name']);
$employeeid = $link->real_escape_string($_POST['emp_id']);
$dob = $link->real_escape_string($_POST['dob']);
$contact_no = $link->real_escape_string($_POST['contact_no']);
$email = $link->real_escape_string($_POST['email']);
$father_name = $link->real_escape_string($_POST['father_name']);
$father_contact = $link->real_escape_string($_POST['father_contact']);
$gender = $link->real_escape_string($_POST['gender']);
$marital_status= $link->real_escape_string($_POST['marital_status']);
$blood_grp= $link->real_escape_string($_POST['blood_grp']);
$id_mark= $link->real_escape_string($_POST['id_mark']);
$esi_no= $link->real_escape_string($_POST['esi_no']);
$pf_no= $link->real_escape_string($_POST['pf_no']);
$aadhaar_no= $link->real_escape_string($_POST['aadhaar_no']);
$pan= $link->real_escape_string($_POST['pan']);
$bank_ac_no= $link->real_escape_string($_POST['bank_ac_no']);
$Ifsc= $link->real_escape_string($_POST['Ifsc']);
$present_address= $link->real_escape_string($_POST['present_address']);
$permanent_address= $link->real_escape_string($_POST['permanent_address']);
$date_of_joining= $link->real_escape_string($_POST['date_of_joining']);
$designation= $link->real_escape_string($_POST['designation']);
$job_department= $link->real_escape_string($_POST['job_department']);
$job_location= $link->real_escape_string($_POST['job_location']);
$ctc_inr= $link->real_escape_string($_POST['ctc_inr']);
$incentive= $link->real_escape_string($_POST['incentive']);
$manager= $link->real_escape_string($_POST['manager']);
$formtype= $link->real_escape_string($_POST['formtype']);


        if($formtype=='edit_form'){
            $education_serialize = serialize($education);
            $service_serialize = serialize($service);
            $family_serialize = serialize($family);
            $emp_id=$link->real_escape_string($_POST['emp_id']);
          
            $sql = " UPDATE `on_boarding` SET `full_name`='$full_name',`dob`='$dob ',`contact_no`='$contact_no',
            `email`='$email',`father_name`='$father_name',`father_contact`='$father_contact',`gender`='$gender',
            `marital_status`='$marital_status',`blood_grp`='$blood_grp',`id_mark`='$id_mark',`esi_no`='$esi_no',
            `pf_no`='$pf_no',`aadhaar_no`='$aadhaar_no',`pan`='$pan',`bank_ac_no`='$bank_ac_no',
            `Ifsc`='$Ifsc',`present_address`='$present_address',`permanent_address`='$permanent_address',
            `date_of_joining`='$date_of_joining',`designation`='$designation',`job_department`='$job_department',`job _location`='$job_location',
            `ctc_inr`='$ctc_inr',`incentive`='$incentive',`education`='$education_serialize',`service_history`='$service_serialize',
            `family`='$family_serialize',
            `manager`='$manager',`emp_id`='$employeeid' WHERE emp_id='$employeeid'";
              
              $response;
              $result = $link->query($sql);
          
              if(!$result){
                  $res = array('success' => false,'message' => 'something went wrong');                
                  array_push($response, $res);
              }
              else{                         
                  $res = array('success' => true,'message' => 'submitted successfully');        
                  array_push($response, $res);
              }
              
              die(json_encode($response));    
          

        }else{
            $education_serialize = serialize($education);
            $service_serialize = serialize($service);
            $family_serialize = serialize($family);
            $emp_id=$link->real_escape_string($_POST['emp_id']);
          
            $sql = "INSERT INTO `on_boarding`( `full_name`, `emp_id`,`dob`, `contact_no`, `email`, `father_name`, `father_contact`, `gender`, `marital_status`, `blood_grp`, `id_mark`, `esi_no`, `pf_no`, `aadhaar_no`, `pan`, `bank_ac_no`, `Ifsc`, `present_address`, `permanent_address`, `date_of_joining`, `designation`, `job_department`, `job _location`, `ctc_inr`, `incentive`,`manager`, `education`, `service_history`, `family`,`acknowledge`, `conduct`, `hand`, `laptop`, `access`, `pay`, `redirect`, `retention`, `benefits`, `loan`, `deductions`, `paycheck`, `status`, `offboarded`) VALUES
            ('$full_name','$employeeid','$dob','$contact_no','$email','$father_name','$father_contact','$gender','$marital_status','$blood_grp','$id_mark','$esi_no','$pf_no','$aadhaar_no','$pan','$bank_ac_no','$Ifsc','$present_address','$permanent_address','$date_of_joining','$designation','$job_department','$job_location','$ctc_inr','$incentive','$manager','$education_serialize',' $service_serialize','$family_serialize','no','no','no','no','no','no','no','no','no','no','no','no','no','no')";
              
              $response;
              $result = $link->query($sql);
          
              if(!$result){
                  $res = array('success' => false,'message' => 'something went wrong');                
                  array_push($response, $res);
              }
              else{                         
                  $res = array('success' => true,'message' => 'submitted successfully');        
                  array_push($response, $res);
              }
              
              die(json_encode($response));    
          

        }
// $target_dir = "../uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $file_name = basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists


// Check if $uploadOk is set to 0 by an error

 //move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
 
?>