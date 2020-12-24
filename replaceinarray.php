<?php
$str  = "You like black, blue and red color.";
$searchVal = array("black", "blue", "red");
$replaceVal = array("pink", "green", "teal");
$res = str_replace($searchVal, $replaceVal, $str);
print_r($res);
