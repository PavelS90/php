<?php

$inch = "28";
$one_side = "12";
$two_side = "9";
$cut = "3";

$var = substr(round((($inch / sqrt(pow(12,2)+pow(9,2)) * 12) * 2.54) / 10, 4), 0, -1);
echo $var;

#$var = (($inch / sqrt(pow(12,2)+pow(9,2)) * 12) * 2.54) / 10;
#echo number_format($var, 3, '.', '');

?>

