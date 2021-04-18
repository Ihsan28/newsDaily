<?php
session_start();
if (empty($_SESSION["email"])) {
    header("Location: ../control/login.php"); // Redirecting To Home Page
}
require('../model/db.php');
if (isset($_POST['update'])) {
    $name = $_REQUEST["name"];
    $f = 1;
    if (empty($name) || strlen($name) < 5 || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $f = 0;
    }
    if ($f == 1) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $userdata = $connection->update_user_data($conobj, "users", $_SESSION["email"], $_POST['name']);
        $connection->CloseCon($conobj);
    }
    header("Location: ../view/profile.php");
}
if (isset($_POST['delete'])) {

    $connection = new db();
    $conobj = $connection->OpenCon();
    $userdata = $connection->delete_user($conobj, "users", $_SESSION["email"]);
    $connection->CloseCon($conobj);
    header("Location: ./logout.php");
}
