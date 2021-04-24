<?php
require('signupcheck.php');

$validateName = "";
$validateEmail = "";
$genderValidation = "";
$validPassword = "";
$validDate = "";
$validatePhone = "";
$validateStreet="";
$validatePost="";
$validateCountry="";

$path="newsdaily/resources/profile/";
$profile="";

$userExistsValidation = "";
$userAddingvalidation = "";

$flag = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $confirmPassword = $_REQUEST["confirmPassword"];
    $date = $_REQUEST["birthday"];
    $phone = $_REQUEST["phone"];
    $street = $_REQUEST["street"];
    $post = $_REQUEST["post"];
    $country = $_REQUEST["country"];
    $random = rand();

    move_uploaded_file($_FILES["image"]["tmp_name"], "../../resources/profile/".$random.$_FILES["image"]["name"]);
    $profile= $path.$random.$_FILES["image"]["name"];

    if (empty($name) || strlen($name) < 5 || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $validateName = "you must enter your name";
        $flag = 0;
    } else {
        $validateName = "your name is " . $name;
    }
    if (empty($email) || !preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $email)) {
        $validateEmail = "you must enter your email";
        $flag = 0;
    } else {
        $validateEmail = "your email is " . $email;
    }

    if (empty($password) || empty($confirmPassword)) {
        $validPassword = "enter valid password ";
        $flag = 0;
    } elseif ($password != $confirmPassword) {
        $validPassword = "password not match";
        $flag = 0;
    } elseif (strlen($password) < 8) {
        $validPassword = "password must contain at least 8 characters";
        $flag = 0;
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/", $password)) {

        $validPassword = "condition  not match";
        $flag = 0;
    } else {
        $validPassword = "password correct";
    }

    if (!isset($_REQUEST["gender"])) {
        $genderValidation = "select your gender";
        $flag = 0;
    } else {
        $gender = $_REQUEST["gender"];
        $genderValidation = "your gender is " . $gender;
    }

    if (empty($date)) {

        $validDate = "date field is required";
        $flag = 0;
    } else {
        $validDate = "select date is " . $date;
    }

    if (empty($phone) || !preg_match("/^[+0-9-]*$/", $phone)) {
        $validatePhone = "you must enter your phone ";
        $flag = 0;
    } else {
        $validatePhone = "your phone number is " . $phone;
    }

   
    if (empty($street)) {
        $validateStreet = "you must enter street";
        $flag = 0;
    }
    else if(!preg_match("/^([A-Za-z0-9#]+)([\d\w-#`~.\s',]*)$/", $street)){
        $validateStreet = "you can only use alphanumeric characters with '#' on start then numbers and (-#`~./,)";
        $flag = 0;
    } else {
        $validateEmail = "your street is " . $street;
    }

    if (empty($post) || !preg_match("/^[+0-9-]*$/", $post)) {
        $validatePost = "you must enter your phone ";
        $flag = 0;
    } else {
        $validatePost = "your phone number is " . $post;
    }

    if (!isset($_REQUEST["country"])) {
        $validateCountry = "Select your country";
        $flag = 0;
    } else {
        $validateCountry = "your country is " . $country;
    }

    if ($flag == 1) {
        if (checkEditorExists($email)) {
            $validateEmail = "Already has an user with this email";
        } else {
            $address= $street.", ".$post.", ".$country;
            $flag=insertEditor($name, $email,$password,$gender,$date,$phone,$address,$profile);
            if($flag)
            {
                header("Location: ../view/signupsuccess.php");
            }
            else
            {
                $userAddingvalidation="something went wrong. try again later";
            }
        }
    }
}
