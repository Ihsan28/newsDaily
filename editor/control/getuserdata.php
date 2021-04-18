<?php
require('../model/db.php');

$connection = new db();
$conobj = $connection->OpenCon();
$userdata = $connection->getUserData($conobj, "users",$_SESSION["email"]);
$connection->CloseCon($conobj);
?>