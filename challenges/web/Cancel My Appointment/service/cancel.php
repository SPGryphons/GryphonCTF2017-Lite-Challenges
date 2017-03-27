<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    session_start();

    if (isset($_SESSION["LoginState"]) && $_SESSION["LoginState"] === True) {

        //Safeguards against manually fired POST requests (E.g. cURL).
        if ($_POST["verify"] === $_SESSION["Nonce"]) {
            echo "<h2>Appointment cancelled!</h2><br>";
            echo "GCTF{4N_1NJ3C710N_4_D4Y_K33P5_7H3_V1RU5_4W4Y}";
            session_unset();
            session_destroy();
        } else {
            echo "<h3>You are not allowed to cancel the selected appointment.</h3>";
        }
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}

?>
