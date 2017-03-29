<?php
$ip=$_POST["ip"];
$cmd="dig ".$ip;
$res=shell_exec($cmd);
echo $res
 ?>
