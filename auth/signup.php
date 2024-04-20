<?php
include "../connect.php";

$firstName = filterRequest("firstName");
$lastName = filterRequest("lastName");
$email = filterRequest("email");
$date = filterRequest("date");
$phone = filterRequest("phone");
$password=filterRequest("password");


$stmt=$con->prepare(
    "INSERT INTO `users`( `frist_name`, `last_name`, `email`, 
    `date_of_birth`, `phone_number`, `password`)
     VALUES (?,?,?,?,?,?");
    
    

$stmt->execute(array($firstName,$lastName,$email,$date,$phone,$password));

$count=$stmt->rowCount();

if($count>0){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"fail"));
}