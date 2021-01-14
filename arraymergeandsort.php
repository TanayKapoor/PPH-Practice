<?php
$a1 = array(4, 6, 2);
$a2 = array(22, 11);
$numbers = array_merge($a1, $a2);
sort($numbers);
$arrlength = count($numbers);
for ($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "\n";
}
