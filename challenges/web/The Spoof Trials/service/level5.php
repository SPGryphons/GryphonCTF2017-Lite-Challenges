<?php
session_start();

if (!isset($_COOKIE["time"])) {
    // Set cookie with time now and expire in a day. Value in seconds.
    setcookie("time", time(), time() + (60 * 60), "/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Level 1</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="lib/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">
    <div class="row">
        <div class="jumbotron text-center">
            <h1 class="text-center">Level 5</h1>
            <?php
            if ($_SESSION["level3success"] == null || $_SESSION["level4success"] == null) {
                ?>
                <p>Come back when you have completed the lower levels.</p>
                <?php
            } else if ($_SESSION["level3success"] == true && $_SESSION["level4success"] == true) {
                if (preg_match("/^[0-9]+$/", $_COOKIE["time"]) == 1 &&
                    (int)$_COOKIE["time"] >= 33040137600
                ) {
                    ?>
                    <h2>You have completed the trials!</h2>
                    <p>GCTF{F4K3_17_71LL_Y0U_M4K3_17}</p>
                    <?php
                } else {
                    ?>
                    <p>The flag will only show itself in the year 3017!</p>
                    <p>In the meantime, have a cookie!</p>
                    <img src="images/cookiemonster.jpg">
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<script src="lib/jquery-3.1.1.min.js"></script>
<script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>

</html>