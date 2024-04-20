<?php
include "../connect.php";


$profileid   = filterRequest("id");

$stmt=$con->prepare("DELETE FROM   ` profile  ` WHERE profile_id =?");

$stmt->execute(array($profileid));

$count=$stmt->rowCount();

if($count>0){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"fail"));
}