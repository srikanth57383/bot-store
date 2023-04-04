<?php
include '../layouts/config.php'; 

$id =$_POST["id"];
$status = $_POST["status"];
$statuNew;
if($status==='Inactive'){
$statuNew='Active';
}else{
$statuNew='Inactive';
}
$response = array(); 


$sql = "UPDATE `forex` SET `active` = '$statuNew' where id='$id'";

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
	
?>