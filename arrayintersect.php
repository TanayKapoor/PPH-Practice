<?php
$a1 = array("a" => "black", "b" => "magenta", "c" => "maroon", "d" => "white");
$a2 = array("e" => "cyan", "f" => "black", "g" => "white");

$result = array_intersect($a1, $a2);
print_r($result);
