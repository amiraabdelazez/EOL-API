<?php
include "../connect.php";


$email=filterRequest("email");
$password=filterRequest("password");

$stmt=$con->prepare(
    "SELECT * FROM users WHERE email=? AND `password`=?");
   

$stmt->execute(array($email,$password));

$count=$stmt->rowCount();

if($count>0){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"fail"));
}