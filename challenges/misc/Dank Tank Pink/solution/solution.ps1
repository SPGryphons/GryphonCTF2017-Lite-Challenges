$alpha="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789"
for($a=0;$a -lt 5000;$a++){
for($i=0;$i -lt 18; $i++){
$string+=Get-Random -InputObject $alpha.ToCharArray()
}
$string[0..8]| %{$adder+=[int]$_}
$string[9..17] | %{$minuser+=[int]$_}
$r=$adder-$minuser
if(($r -eq 60)){
$string
}
$string=""
$r=$adder=$minuser=0
}
