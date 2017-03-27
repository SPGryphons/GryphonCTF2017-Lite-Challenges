<?php

session_start();
if (isset($_SESSION["LoginState"]) && $_SESSION["LoginState"] == True) {
    session_unset();
    $_SESSION["LogoutState"] = True;
} else {
    session_unset();
    session_destroy();
}

header("Location: index.php");

?>
