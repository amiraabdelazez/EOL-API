<?php
include "../connect.php";


$first_name = filterRequest("first_name");
$email  = filterRequest("email");
$massege  = filterRequest("massege");
$userid   = filterRequest("id");

$stmt=$con->prepare(
    "INSERT INTO `contact`( `first_name`, `email`, `massege`, `contact_user`)
     VALUES (?,?,?,?)");

$stmt->execute(array($first_name,$email,$massege,$userid));

$count=$stmt->rowCount();

if($count>0){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"fail"));
}