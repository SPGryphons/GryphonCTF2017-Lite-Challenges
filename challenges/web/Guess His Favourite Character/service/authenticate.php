<?php
if(strcmp(str_replace(" ","",$_POST["guess"]),"53746172706c6174696e756d")==0){
echo "Flag : GCTF{D0NT_C4LL_M3_W33B}";
}
else{
  echo "Maybe u guessed wrongly?";
}
 ?>
