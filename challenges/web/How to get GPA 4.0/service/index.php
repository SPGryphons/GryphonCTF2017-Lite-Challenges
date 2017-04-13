
<?php
$flag=false;
$meh="secretstuff.php";
if(!empty($_GET["include"])){
$meh=$_GET["include"];
}
include $meh;
function check($pass){
if(!empty($pass)){
  $trueflag=shell_exec("./passwd");
  if(strcmp($trueflag,$pass)==0){
    return true;
    echo "works";
  }
  else{
    echo '<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Failed!</strong> Password is wrong!
</div>';
return false;
  }
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="col-xs-12 text-center text-danger">
        <h1>How to get GPA 4.0!</h1>
    </div>
    <hr>
    <br>
    <div class="col-xs-12 text-center text-info">
      <p style="font-size:150%">Do you want to get GPA 4.0? Find my password to know the secret.....</p>
    </div>
    <div class="col-xs-12 text-center">
      <?php $flag=check($_GET["passwd"]) ?>
      <form action=".">
        <div class="form-group">
            <input type="hidden" name="include" value='secretstuff.php'>
          <label for="passwd">Password</label>
          <input type="text" class="form-control" id="passwd" name="passwd" placeholder="password">
          <button type="submit" class="btn btn-default">
            Guess Password
          </button>
        </div>
      </form>
    </div>
    <?php if($flag){ ?>
      <div class="col-xs-12 text-center text-info">
        <p style="font-size:150%">Guessed my password? Not bad but my secrets are hidden even deeper! Print mah flag out!</p>
      </div>
        <div class="col-xs-12 text-center">
          <form action="./?include=secretstuff.php">
            <div class="form-group">
              <input type="hidden" name="include" value='secretstuff.php'>
              <input type="hidden" name="passwd" value='wrongval'>
              <input type="text" name="printer" class="form-control" placeholder="Input some text to print da flag">
              <button type="submit" class="btn btn-success">
                Print the flag
              </button>
            </div>
          </form>
          <p>
          <?php
          if(!empty($_GET["printer"])){
          $val=$_GET["printer"];
          eval("echo $val;");
        }
          ?></p>
        </div>
      <?php } ?>
  </body>
</html>
