<?php
include "../connect.php";


$fullname    = filterRequest("fullname");
$userid   = filterRequest("id");

$stmt=$con->prepare(
    "INSERT INTO `profile`( `full_name`, `profile_user`) 
    VALUES (?,?)");

$stmt->execute(array($fullname,$userid));

$count=$stmt->rowCount();

if($count>0){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"fail"));
}