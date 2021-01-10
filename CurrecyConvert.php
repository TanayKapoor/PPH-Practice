<?php

$cur = 50;

$code = 2;

if ($code == 1) {
    // Calculating for  INR to USD
    $dollar = $cur / 71;
    echo "You have " . $dollar . " USD" . "\n";
} elseif ($code == 2) {
    // Calculating for USD to INR
    $rupee = $cur * 71;
    echo "You have " . $rupee . " INR" . "\n";
}
