<?php

###variables
$inch = "28";
$one_side = "12";
$sec_side = "9";
$cut = "3";
###

$var = (($inch / sqrt(pow($one_side,2)+pow($sec_side,2)) * 12) * 2.54) / 10;
$var = explode('.', $var);
$solution .= $var[0].".";
if(!empty($var[1])) { $solution .= substr($var[1], 0, 3); }
$result = str_replace('.', ',', $solution);
echo $result . " Дм.";




###tests
#$one = substr(round((($inch / sqrt(pow(12,2)+pow(9,2)) * 12) * 2.54) / 10, 4), 0, -1);
#$two = (($inch / sqrt(pow(12,2)+pow(9,2)) * 12) * 2.54) / 10;
###print tests
#echo $one . " Дм. <br>" . number_format($two, $cut, '.', '') . " Дм.";


?>

