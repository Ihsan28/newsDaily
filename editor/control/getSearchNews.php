<?php
session_start();
require_once('../model/db.php');
$connection = new db();
$conobj = $connection->OpenCon();
$nid=$_SESSION['nid'];
$userdata = $connection->getSearchNews($conobj, "news", $_REQUEST['data']);
$connection->CloseCon($conobj);
$emparray = array();
while ($row = mysqli_fetch_assoc($userdata)) {
    $emparray[] = $row;
}
echo json_encode($emparray);
