<?php
if(strcmp(str_replace(" ","",$_POST["guess"]),"53746172706c6174696e756d")==0){
echo "Flag : GCTF{G1t_Gud_M4T3}";
}
else{
  echo "Maybe u guessed wrongly?";
}
 ?>
