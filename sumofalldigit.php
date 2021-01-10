<?php

$num = 12345;

$temp = $num;

while ($temp != 0) {
    $remainder = $temp % 10;
    $sum = $sum + $remainder;
    $temp = $temp / 10;
}

echo "Sum of digits of $num is " . $sum . "\n";
