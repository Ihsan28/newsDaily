<?php
include('../model/db.php');
function checkEditorExists($email)
{

    $connection = new db();
    $conobj = $connection->openCon();
    $userQuery = $connection->checkEditorExist($conobj, "editor", $email);

    if ($userQuery->num_rows > 0) {
        return true;
    } else {
        return false;
    }
    $connection->closeCon($conobj);
}
function insertEditor($name, $email,$password,$gender,$dob)
{
    $connection = new db();
    $conobj = $connection->openCon();
    $insertStatus = $connection->addEditor($conobj, "editor", $name, $email,$password,$gender,$dob);
    $connection->closeCon($conobj);

    return $insertStatus;

}
