<?php
class db
{
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "newsdb";
        $con = new mysqli($dbhost, $dbuser, $dbpass, $db);

        return $con;
    }
    function CheckUser($con, $table, $email, $password, $type)
    {
        $status = "approved";
        $result = $con->query("SELECT * FROM " . $table . " WHERE email='" . $email . "' AND password='" . $password . "'AND type='" . $type . "' ANd status = '" . $status . "'");
        return $result;
    }
    function CheckUserexist($con, $table, $email, $type)
    {
        $result = $con->query("SELECT * FROM " . $table . " WHERE email='" . $email . "' AND type='" . $type . "'");
        return $result;
    }

    function addEditor($con, $table, $name, $email, $password, $gender, $dob, $type)
    {
        $status = "pending";
        $sql = "INSERT INTO " . $table . " (name, email, password, gender, dob, type ,status) VALUES ('" . $name . "','" . $email . "','" . $password . "','" . $gender . "','" . $dob . "','" . $type . "','" . $status . "')";
        if ($con->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    function update_user_data($con,$table,$email,$name)
    {
        $sql ="update ".$table." set name = '".$name."' where email = '".$email."'";
        $result = $con->query($sql);
    }

    function getUserData($con,$table,$email)
    {
        $result = $con->query("SELECT * FROM  $table where email = '".$email."'");
        return $result;
    }

    function delete_user($con,$table,$email)
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

    function CloseCon($con)
    {
        $con->close();
    }
}