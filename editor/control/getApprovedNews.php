<?php
require_once('../model/db.php');
$connection = new db();
$conobj = $connection->OpenCon();
$data = $connection->getAprrovedNews($conobj, "news");
$connection->CloseCon($conobj);
$emparray = array();
while ($row = mysqli_fetch_assoc($data)) {
    $emparray[] = $row;
}
echo json_encode($emparray);