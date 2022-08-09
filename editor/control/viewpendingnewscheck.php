<?php
require_once('../model/db.php');

if (isset($_POST['view'])) {

    viewNews();
    
}

if (isset($_POST['viewApproved'])) {

    viewApprovedNews();

}
// for pending news
if (isset($_POST['accept'])) {

     newsAccept($_SESSION['nid'],$_SESSION['id'],"");
}

if (isset($_POST['update'])) {

    newsUpdate($_SESSION['nid'],$_SESSION['id'],$_REQUEST['title'],$_REQUEST['body'],"updated");
}

if (isset($_POST['reject'])) {

     newsReject($_SESSION['nid'],$_SESSION['id'],"");
    
}

// for totalnews
if (isset($_POST['viewall'])) {

    viewAllNews();
    
}
if (isset($_POST['acceptall'])) {

    newsAcceptAll($_SESSION['nid'],$_SESSION['id'],"");
}

if (isset($_POST['updateall'])) {

   newsUpdateAll($_SESSION['nid'],$_SESSION['id'],$_REQUEST['title'],$_REQUEST['body'],"updated");
}

if (isset($_POST['rejectall'])) {

    newsRejectAll($_SESSION['nid'],$_SESSION['id'],"");
   
}

// for hide news
if (isset($_POST['viewhidden'])) {

    viewHiddenNews();
    
}

if (isset($_POST['hidden'])) {

    newsHide($_SESSION['nid'],$_SESSION['id'],"");
}

if (isset($_POST['unhide'])) {

    newsUnhide($_SESSION['nid'],$_SESSION['id'],"");
}

if (isset($_POST['updatehidden'])) {

    newsUpdatehidden($_SESSION['nid'],$_SESSION['id'],$_REQUEST['title'],$_REQUEST['body'],"updated");
 }
 
 if (isset($_POST['rejecthidden'])) {
 
    newsRejectHidden($_SESSION['nid'],$_SESSION['id'],"");
    
 }



// -----------------------------functions----------------------------------------------------------
function newsAccept($id, $eid, $remark)
{
    if (isset($_POST['accept'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->updateNewsStatus($conobj, "news", $id, $eid, "approved", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/pendingnews.php");
    }
}

function newsUpdate($id, $eid,$title1,$body1, $remark)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $connection = new db();
        $conobj = $connection->OpenCon();
        $title=str_replace("'", "''", "$title1");
        $body= str_replace("'", "''", "$body1");
        $editordata = $connection->updateNewsData($conobj, "news", $id, $title, $body, $eid, "approved", $remark);
        $connection->closeCon($conobj);

        header("Location: ../view/pendingnews.php");
    }
}

function newsReject($id, $eid,$remark)
{
    if (isset($_POST['reject'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->updateNewsStatus($conobj, "news", $id, $eid, "reject", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/pendingnews.php");
    }
}

// total news functions
function newsAcceptAll($id, $eid, $remark)
{
    if (isset($_POST['acceptall'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->updateNewsStatus($conobj, "news", $id, $eid, "approved", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/totalnews.php");
    }
}

function newsUpdateAll($id, $eid,$title1,$body1, $remark)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $connection = new db();
        $conobj = $connection->OpenCon();
        $title=str_replace("'", "''", "$title1");
        $body= str_replace("'", "''", "$body1");
        $editordata = $connection->updateNewsData($conobj, "news", $id, $title, $body, $eid, "approved", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/totalnews.php");
    }
}

function newsRejectAll($id, $eid,$remark)
{
    if (isset($_POST['rejectall'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->updateNewsStatus($conobj, "news", $id, $eid, "reject", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/totalnews.php");
    }
}
// hide news function
function newsHide($id, $eid,$remark)
{
    if (isset($_POST['hidden'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->updateNewsStatus($conobj, "news", $id, $eid, "hidden", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/hidenews.php");
    }
}

function newsUnhide($id, $eid,$remark)
{
    if (isset($_POST['unhide'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->updateNewsStatus($conobj, "news", $id, $eid, "approved", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/hiddennews.php");
    }
}

function newsUpdatehidden($id, $eid,$title1,$body1, $remark)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $connection = new db();
        $conobj = $connection->OpenCon();
        $title=str_replace("'", "''", "$title1");
        $body= str_replace("'", "''", "$body1");
        $editordata = $connection->updateNewsData($conobj, "news", $id, $title, $body, $eid, "approved", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/hiddennews.php");
    }
}

function newsRejectHidden($id, $eid,$remark)
{
    if (isset($_POST['rejecthidden'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->updateNewsStatus($conobj, "news", $id, $eid, "reject", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/hiddennews.php");
    }
}

// view
function viewNews(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
     
        $nid=$_REQUEST["id"];
        $rid=$_REQUEST["rid"];
        session_start();
            $_SESSION['nid']=$nid;
            $_SESSION['rid']=$rid;
            header("Location: ../view/viewpendingnews.php?nid=".$nid);
                
    }
}

function viewAllNews(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
     
        $nid=$_REQUEST["id"];
        $rid=$_REQUEST["rid"];
        session_start();
            $_SESSION['nid']=$nid;
            $_SESSION['rid']=$rid;
            header("Location: ../view/viewAllNews.php?nid=".$nid);
                
    }
}

function viewApprovedNews(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
     
        $nid=$_REQUEST["id"];
        $rid=$_REQUEST["rid"];
        session_start();
            $_SESSION['nid']=$nid;
            $_SESSION['rid']=$rid;
            header("Location: ../view/viewApprovednews.php?nid=".$nid);
                
    }
}

function viewHiddenNews(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
     
        $nid=$_REQUEST["id"];
        $rid=$_REQUEST["rid"];
        session_start();
            $_SESSION['nid']=$nid;
            $_SESSION['rid']=$rid;
            header("Location: ../view/viewHiddenNews.php?nid=".$nid);
                
    }
}