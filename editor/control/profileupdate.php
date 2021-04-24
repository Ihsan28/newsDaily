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
        $userdata = $connection->updateEditorData($conobj, "editor", $_SESSION["email"], $_POST['name']);
        $connection->closeCon($conobj);
    }
    header("Location: ../view/profile.php");
}
if (isset($_POST['delete'])) {

    $connection = new db();
    $conobj = $connection->openCon();
    $userdata = $connection->deleteEditor($conobj, "editor", $_SESSION["email"]);
    $connection->closeCon($conobj);
    header("Location: ./logout.php");
}
