<?php 
echo "ender day: ";
$d=readline();

echo "ender month: ";
$m=readline();

echo "ender year: ";
$y=readline();

$UD=$y-date("Y");
$UM=$m-date("m");
$UY=$d-date("d");

echo $UD."/".$UM."/".$UY;

?>