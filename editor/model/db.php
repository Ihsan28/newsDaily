<?php
class db
{
    function openCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "newsdb";
        $con = new mysqli($dbhost, $dbuser, $dbpass, $db);

        return $con;
    }
    function checkEditor($con, $table, $email, $password)
    {
        //$status = "approved";
        $result = $con->query("SELECT * FROM " . $table . " WHERE email='" . $email . "' AND password='" . $password . "' AND status = 'approved'");
        return $result;
    }
    function checkEditorExist($con, $table, $email)
    {
        $result = $con->query("SELECT * FROM " . $table . " WHERE email='" . $email . "'");
        return $result;
    }

    function addEditor($con, $table, $name, $email, $password, $gender, $dob)
    {
        //$status = "pending";
        $sql = "INSERT INTO " . $table . " (name, email, password, gender, dob, status) VALUES ('" . $name . "','" . $email . "','" . $password . "','" . $gender . "','" . $dob . "','pending')";
        if ($con->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    function updateEditorData($con,$table,$email,$name)
    {
        $sql ="update ".$table." set name = '".$name."' where email = '".$email."'";
        $result = $con->query($sql);
    }

    function getEditorData($con,$table,$email)
    {
        $result = $con->query("SELECT * FROM  $table where email = '".$email."'");
        return $result;
    }

    function deleteEditor($con,$table,$email)
    {
        $sql ="DELETE  from ".$table." where email = '".$email."'";
        $result = $con->query($sql);
        
    }
    
    function getPendingNewsRequest($con,$table)
    {
        $result = $con->query("SELECT * FROM  $table where status = 'pending'"); 
        return $result;
    }
    function update_news_status($con,$table,$id,$status)
    {
        $sql ="update ".$table." set status = '".$status."' where id = '".$id."'";  //delete
        $result = $con->query($sql);
    }

    function closeCon($con)
    {
        $con->close();
    }
}