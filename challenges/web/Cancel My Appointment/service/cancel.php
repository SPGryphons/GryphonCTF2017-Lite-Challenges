<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_SESSION["LoginState"]) && $_SESSION["LoginState"]) {

        //Safeguards against manually fired POST requests (E.g. cURL).
        if ($_POST["verify"] === $_SESSION["Nonce"]) {
            echo "<h2>Appointment cancelled!</h2><br>";
            echo "GCTF{4N_1NJ3C710N_4_D4Y_G1V35_7H3_FL46_4W4Y}";
            session_unset();
            session_destroy();
        } else {
            echo "<h3>You are not allowed to cancel the selected appointment.</h3>";
        }
    } else {
        header("Location: index.php");
    }
} else {
    if (isset($_SESSION["LoginState"]) && $_SESSION["LoginState"]) {
        echo "<h1>Sorry forced browsing does not work :(</h1>";
        echo "<h3>Try something else.</h3>";
    } else {
        header("Location: index.php");
    }
}

?>
