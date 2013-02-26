<?php

$inch = "28";
$one_side = "12";
$two_side = "9";
$cut = "3";

###result 1
$var = substr(round((($inch / sqrt(pow(12,2)+pow(9,2)) * 12) * 2.54) / 10, 4), 0, -1);

###result 2
$vars = (($inch / sqrt(pow(12,2)+pow(9,2)) * 12) * 2.54) / 10;

###print results
echo $var . "<br>" . number_format($vars, 3, '.', '');

?>

