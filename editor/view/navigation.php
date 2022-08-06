<?php
// session_start();
// if (empty($_SESSION["email"])) {
//     header("Location: ../control/signin.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/navigationstyle.css">
</head>
<body>
<div class="dis-property">
        <div class="top-nav">
            <div class="logo">
                <h3>news<span>DAILY</span></h3>
            </div>

            <div class="editor">
                <p>Editor's Panel</p>
            </div>

            <div class="item-3">
                <div class="profile-info">

                    <div class="pic-area"><img src="<?php echo $profile ?>" alt="..\..\resources\profile\default.png"></div>

                    <div class="a2">
                        <p class="u-name"><?php echo $name ?></p>
                    </div>

                    <div class="a3">
                        <p>Editor</p>
                    </div>

                </div>
                <div class="btn-logout">
                    <a href="../control/logout.php">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>