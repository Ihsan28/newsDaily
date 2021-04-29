<?php
session_start();
require('../model/db.php');
$connection = new db();
$conobj = $connection->OpenCon();
$nid=$_SESSION['nid'];
$userdata = $connection->getNewsRequest($conobj, "news", $nid);
$connection->CloseCon($conobj);
$emparray = array();
while ($row = mysqli_fetch_assoc($userdata)) {
    $emparray[] = $row;
}
echo json_encode($emparray);
