<?php
include('../model/db.php');
function checkUserExists($email)
{

    $connection = new db();
    $conobj = $connection->OpenCon();
    $userQuery = $connection->CheckUserexist($conobj, "users", $email, "editor");

    if ($userQuery->num_rows > 0) {
        return true;
    } else {
        return false;
    }
    $connection->CloseCon($conobj);
}
function insertEditor($name, $email,$password,$gender,$dob)
{
    $connection = new db();
    $conobj = $connection->OpenCon();
    $insertStatus = $connection->addEditor($conobj, "users", $name, $email,$password,$gender,$dob,"editor");

    return $insertStatus;

}
