<?php
function secondlarge($num1, $num2, $num3)
{
    if ($num1 >= $num2 && $num1 >= $num3) {
        if ($num2 >= $num3) {
            echo $num2;
        } else {
            echo $num3;
        }
    } else if ($num2 >= $num1 && $num2 >= $num3) {
        if ($num1 >= $num3) {
            echo $num1;
        } else {
            echo $num3;
        }
    } else if ($num1 >= $num2) {
        echo $num1;
    } else {
        echo $num2;
    }
}
