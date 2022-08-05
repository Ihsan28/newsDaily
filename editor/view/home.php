<?php
session_start();
if (empty($_SESSION["email"])) {
    header("Location: ./login.php");
}
else {
    $cookie_name = "user";
    $cookie_value = $_SESSION['email'];
    setcookie($cookie_name, $cookie_value, time() + (86400), "/");
}
require('../control/geteditorinfo.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homestyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet" />

    <title>Document</title>
</head>

<body>
    <?php include('./navigation.php') ?>
    <?php include('./sideBar.php') ?>
    <!-- content -->
    <section id="space-maintain">

        <div class="u-count" >
            <p>All News Count</p>
            <a id="view-btn" href="./totalnews.php">VIEW</a>
            <br>
            <div class="count">
            <p id="total-news-count">0</p>
            </div>
            
        </div>

        <div class="u-count" >
            <p>Pending News Count</p>
            <a id="view-btn" href="./pendingnews.php">VIEW</a>
            <br>
            <div class="count">
            <p id="pendingnews-count">0</p>
            </div>
        </div>

        <div class="u-count" >
            <p>Hidden News Count</p>
            <a id="view-btn" href="./hiddennews.php">VIEW</a>
            <br>
            <div class="count">
            <p id="hiddennews-count">0</p>
            </div>
            
        </div>

        <div class="u-count" >
            <p>Suspended Reporters</p>
            <a id="view-btn" href="./getSuspendedReporter.php">VIEW</a>
            <br>
            <div class="count">
            <p id="ac-suspend-count">0</p>
            </div>
        </div>

        <div class="u-count" >
            <p>Active Editor</p>
            <a id="view-btn" href="./getActiveEditor.php">VIEW</a>
            <br>
            <div class="count">
            <p id="ac-editor-count">0</p>
            </div>
            
        </div>

        <div class="u-count" >
            <p>Active Reporter</p>
            <a id="view-btn" href="./getActiveReporter.php">VIEW</a>
            <br>
            <div class="count">
            <p id="ac-reporter-count">0</p>
            </div>
        </div>

        <!-- <div class="u-count" >
            <p>Active User</p>
            <a id="view-btn" href="./getActiveUser.php">VIEW</a>
            <br>
            <div class="count">
            <p id="ac-user-count">0</p>
            </div>
        </div> -->

        


    </section>
    <script src="../js/getpanelinfo.js"></script>
    <script>
        MyAjaxFunc();
    </script>

</body>

</html>