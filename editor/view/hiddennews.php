<?php
session_start();
if (empty($_SESSION["email"])) {
    header("Location: ./login.php");
}
require('../control/geteditorinfo.php');
require('../control/viewpendingnewscheck.php');
?>
<!-- $dob,$image -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/pendingnews.css">
    <title>Document</title>
</head>

<body>
<?php include('./navigation.php') ?>
<?php include('./sideBar.php') ?>

    <section id="space-maintain">
        <div id="main-container">
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
                    <p>VIEW</p>
                </div>

            </div>

            <script src="../js/getHiddenNews.js"></script>
            <script>
                MyAjaxFunc();
            </script>
        </div>
    </section>

</body>

</html>