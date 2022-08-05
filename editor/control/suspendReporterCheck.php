<?php
require_once('../model/db.php');

if (isset($_POST['suspend'])) {

     suspendReporter($_REQUEST['id']);
    
}

if (isset($_POST['approved'])) {

    revokeSuspendReporter($_REQUEST['id']);
   
}

function suspendReporter($id)
{
    if (isset($_POST['suspend'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->SuspendReporter($conobj, "reporter", $id);
        $connection->closeCon($conobj);
    
        header("Location: ../view/suspendReporter.php");
    }
}

function revokeSuspendReporter($id)
{
    if (isset($_POST['approved'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->RevokeSuspendReporter($conobj, "reporter", $id);
        $connection->closeCon($conobj);
    
        header("Location: ../view/getSuspendedReporter.php");
    }
}

