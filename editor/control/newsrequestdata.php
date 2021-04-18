<?php
require('../model/db.php');
$con = new db();
$conobj = $con->OpenCon();
$newsdata = $con->getPendingNewsRequest($conobj, "news");
$con->CloseCon($conobj);
$infoarray = array();
while($row = mysqli_fetch_assoc($newsdata))
{
    $infoarray[]=$row;
}
echo json_encode($infoarray);
?>