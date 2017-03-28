<?php
if (!isset($LoginState) || $LoginState === False) {
    header("Location: index.php");
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
            <h1><img class="logo" src="assets/logo.png" alt=""> myAppointments</h1>
        </div>
        <div class="pre-jumbotron">
            <div class="jumbotron">
                <h2>Welcome, <?php echo $username ?></h2>
                <br>
                <a href="logout.php" class="btn btn-danger">Log out</a>
                <br><br>
                <h4>You have <?php echo $_SESSION["BookingNo"] ?> upcoming appointment(s).</h4>
                <?php
                if ($_SESSION["BookingNo"] > 0) echo "<a href=\"all.php\" class=\"btn btn-primary\">View All Appointments</a>";
                ?>
                <a onclick="maintenance()" class="btn btn-primary">Book New Appointment</a>
            </div>
        </div>
    </div>
    <script>
    function maintenance() {
        alert("Appointment Booking feature is under maintenance.");
    }
    </script>
</body>
</html>
