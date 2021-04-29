<?php
require('../control/verifynewscheck.php');

if (isset($_POST['view'])) {

    viewNews();
    
}
if (isset($_POST['accept'])) {

     newsAccept($_SESSION['nid'],$_SESSION['id'],"");
}
if (isset($_POST['reject'])) {

     newsReject($_SESSION['nid'],$_SESSION['id'],"");
    
}