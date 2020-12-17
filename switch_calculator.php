<?php
function switchcalculator($operator, $first_num, $second_num) 
{
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
        }
    echo $result;    
}

echo switchcalculator("Add", 1, 2)."<br>";
echo switchcalculator("Subtract", 2, 1)."<br>";
echo switchcalculator("Multiply", 2, 2)."<br>";
echo switchcalculator("Divide", 4, 2)."<br>";
