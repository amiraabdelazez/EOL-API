<?php
include "../connect.php";


$userid=filterRequest("id");

$stmt=$con->prepare( "SELECT * FROM `profile` WHERE   `profile_user` ");
   

$stmt->execute(array($userid));

$data = $stmt->fetch(PDO::FETCH_ASSOC);

$count=$stmt->rowCount();

if($count>0){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"fail"));
}