<?php

$alert = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once("includes/constants.php");

    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT username FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_array();

        $_SESSION["LoginState"] = True;
        $_SESSION["Username"] = $row["username"];
        $_SESSION["Nonce"] = bin2hex(random_bytes(16));
        header("Location: index.php");
    } else {
        $alert = "<div class='alert alert-danger'>Invalid credentials.</div>";
        session_unset();
        session_destroy();
    }

} else {
    if (isset($_SESSION["LogoutState"]) && $_SESSION["LogoutState"] === True) {
        $alert = "<div class='alert alert-success'>You have successfully logged out.</div>";
    } else {
        $alert = "<div class='alert alert-info'>Please login to continue.</div>";
    }

    if (session_status() === PHP_SESSION_ACTIVE) {
        session_unset();
        session_destroy();
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>myAppointments</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1><img class="logo" src="assets/logo.png" alt=""> myAppointments Login</h1>
        </div>
        <div class="pre-jumbotron">
            <?php if(isset($alert)) echo $alert ?>
            <div class="jumbotron">
                <form action="index.php" method="post" autocomplete="off">
                    <div class="field-wrap">
                        <label for="staffID">Username:</label>
                        <div class="input-field">
                            <input class="form-control" type="text" name="username">
                        </div>
                    </div>
                    <div class="field-wrap">
                        <label for="password">Password:</label>
                        <div class="input-field">
                            <input class="form-control" type="password" name="password">
                        </div>
                    </div>
                    <div class="field-wrap">
                        <div class="input-group">
                            <input class="form-control btn btn-default" type="submit" value="Login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
