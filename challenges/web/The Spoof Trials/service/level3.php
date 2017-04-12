<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Level 3</title>

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

<?php
if (strpos($_SERVER["HTTP_REFERER"], "play.spgame.site:10014/level0.php") !== false) {
    ?>
    <script>
        alert("Sorry. You can only come from level 0.");
        window.location.replace("level1.php");
    </script>
<?php
} else {
// Set session variable to move on to next part
$_SESSION["level3success"] = true;
?>
    <body>
    <div class="container">
        <div class="row">
            <div class="jumbotron text-center">
                <h1>Level 3</h1>
                <p>Well done but these aren't the flags you are looking for.</p>
                <p>Continue to level 4!</p>
                <img src="images/worldflags.jpg">
            </div>
        </div>
    </div>

    <script src="lib/jquery-3.1.1.min.js"></script>
    <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
    <?php
}
?>
</html>