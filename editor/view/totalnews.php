<?php
session_start();
if (empty($_SESSION["email"])) {
    header("Location: ./login.php");
}
require('../control/geteditorinfo.php');
require('../control/viewpendingnewscheck.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/totalnews.css">
    <script src="../js/gettotalnews.js"></script>
    <title>Document</title>
</head>

<body>
    <?php include('./navigation.php') ?>
    <?php include('./sideBar.php') ?>

    <section id="space-maintain">
        <div class="find-news">
            <input class="find-news" type="text" name="find" id="find" onkeyup="findNews()" placeholder="Find News By Title">
        </div>
        <div class="p-container">
            <div>
                <p>ID </p>
            </div>
            <div>
                <p>REPORTER</p>
            </div>
            <div>
                <p>TITLE </p>
            </div>
            <div>
                <p>CATAGORY</p>
            </div>
            <div>
                <p>STATUS</p>
            </div>
            <div>
                <p>VIEW</p>
            </div>

        </div>
        <div id="main-container">
            <script src="../js/gettotalnews.js"></script>
            <script>
                MyAjaxFunc();
            </script>
        </div>

    </section>

</body>

</html>