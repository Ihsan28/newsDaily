<?php
function newsAccept($id, $eid, $remark)
{
    if (isset($_POST['accept'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->updateNewsData($conobj, "news", $id, $eid, "accept", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/pendingnews.php");
    }
}
function newsReject($id, $eid,$remark)
{
    if (isset($_POST['reject'])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $editordata = $connection->updateNewsData($conobj, "news", $id, $eid, "reject", $remark);
        $connection->closeCon($conobj);
    
        header("Location: ../view/pendingnews.php");
    }
}

function viewNews(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
     
        $id=$_REQUEST["id"];
        session_start();
            $_SESSION['nid']=$id;
            header("Location: ../view/viewpendingnews.php");
                
    }
}

