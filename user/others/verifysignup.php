<?php
require('../model/db.php');
if (isset($_POST['approve'])) {
    $connection = new db();
    $conobj = $connection->OpenCon();
    $userdata = $connection->update_user_status($conobj, "users", $_POST["email"], "approved");
    $connection->CloseCon($conobj);
    header("Location: ../view/signuprequest.php");
}
if (isset($_POST['reject'])) {
    $connection = new db();
    $conobj = $connection->OpenCon();
    $userdata = $connection->update_user_status($conobj, "users", $_POST["email"], "rejected");
    $connection->CloseCon($conobj);
    header("Location: ../view/signuprequest.php");
}
