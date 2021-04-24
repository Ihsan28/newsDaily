<?php
require('../model/db.php');

$connection = new db();
$conobj = $connection->openCon();
$userdata = $connection->getEditorData($conobj, "editor",$_SESSION["email"]);
$connection->closeCon($conobj);
?>