
<?php
session_start(); 
if(empty($_SESSION["email"])) 
{
header("Location: ../control/login.php"); 
}
?>
<?php
    require('../control\getuserdata.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your Profile</h1>
    <form action="../control/profileupdate.php" method="post">
    <?php
    if ($userdata->num_rows > "0") {
        while ($row = $userdata->fetch_assoc()) {
            echo '
           
            <br> name: <input type="text" name="name" value ="'.$row['name'].'">
            <input type="submit" value="update" name="update">
            <br>email: <input type="text" name="email" value ="'.$row['email'].'">
            <br>gender: '.$row['gender'].'
            <br>dob: '.$row['dob'].'
            ';
        }
    }
    ?>
    <br>
    <br>
    Delete your account:
    <input type="submit" value="delete" name="delete">
    </form>
    <a href="./pageone.php"> back to homepage </a>
</body>
</html>