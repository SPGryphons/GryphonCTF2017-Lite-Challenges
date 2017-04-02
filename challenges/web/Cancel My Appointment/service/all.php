<?php

session_start();

if (isset($_SESSION["LoginState"]) && $_SESSION["LoginState"]) {
    $username = $_SESSION["Username"];
} else {
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
                <a href="index.php" class="btn btn-primary">Back to Main Page</a>
                <br><br>
                <h4>You have <?php echo $_SESSION["BookingNo"] ?> upcoming appointment(s).</h4>
                <br>
                <p class="p-small"><strong>Cancellation policy:</strong></p>
                <p class="p-small">Appointments that will happen within 2 month(s) time cannot be cancelled.</p>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Appointment ID</th>
                            <th>Procedure</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        <tr class="success">
                            <td>1</td>
                            <td>Check up</td>
                            <td>16 February 2017</td>
                            <td></td>
                        </tr>
                        <tr class="success">
                            <td>2</td>
                            <td>Check up</td>
                            <td>27 March 2017</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Injection</td>
                            <td>16 May 2017</td>
                            <td><button onclick="post()" class="btn btn-danger" disabled>Cancel</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
    function post() {
        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", "cancel.php");
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "verify");
        hiddenField.setAttribute("value", "<?php echo $_SESSION["Nonce"] ?>");
        form.appendChild(hiddenField);
        document.body.appendChild(form);
        form.submit();
    };
    </script>
</body>
</html>
