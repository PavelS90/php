<?php

###variables
$inch = "28";
$one_side = "12";
$two_side = "9";
$cut = "3";
###

$var = (($inch / sqrt(pow(12,2)+pow(9,2)) * 12) * 2.54) / 10;
$var = explode('.', $var);
$solution .= $var[0].".";
if(!empty($var[1])) { $solution .= substr($var[1], 0, $cut); }
$result = str_replace('.', ',', $solution);
echo $result;
?>

