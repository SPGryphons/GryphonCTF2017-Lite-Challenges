<?php

session_start();

if (isset($_SESSION["LoginState"]) && $_SESSION["LoginState"] === True) {
    $LoginState = True;
    $username = $_SESSION["Username"];

    if ($username === "potato") {
        $_SESSION["BookingNo"] = 1;
    } else {
        $_SESSION["BookingNo"] = 0;
    }

    require_once("main.php");
} else {
    require_once("login.php");
}

?>
