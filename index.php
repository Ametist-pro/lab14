<?php
$array = [ [1, 2, 3], [4, 5, 6], [7, 8, 9] ];
$sum = 0;
for ($i = 0; $i < count($array); $i++) {
    $sum += $array[$i][$i];
}

echo $sum;
?>