<?php

include("connect.php");

$stmt=$con->prepare("SELECT*FROM user");
$stmt-> execute();
$user=$stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($user);