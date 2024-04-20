<?php
include "../connect.php";

$iprofileid  = filterRequest("id");
$fullname   = filterRequest("fullname");



$stmt=$con->prepare( "UPDATE `profile` SET 
`full_name`=? WHERE profile_id ");

$stmt->execute(array($fullname,$profile_id));

$count=$stmt->rowCount();

if($count>0){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"fail"));
}