<?php

function add($a, $b)
{
    $result = $a + $b;
    echo "Sum is: " . $result . "\n";
}
function subtract($a, $b)
{
    $result = $a - $b;
    echo "Difference is: " . $result . "\n";
}
function multiply($a, $b)
{
    $result = $a * $b;
    echo "Product is: " . $result . "\n";
}
function divide($a, $b)
{
    $result = $a - $b;
    echo "Quotient is: " . $result . "\n";
}

function functionswitchcalculator($operator, $first_num, $second_num)
{
    switch ($operator) {
        case "Add":
            echo add($first_num, $second_num);
            break;
        case "Subtract":
            echo subtract($first_num, $second_num);
            break;
        case "Multiply":
            echo multiply($first_num, $second_num);
            break;
        case "Divide":
            echo divide($first_num, $second_num);
    }
}

echo functionswitchcalculator("Add", 1, 2);
echo functionswitchcalculator("Subtract", 2, 1);
echo functionswitchcalculator("Multiply", 2, 2);
echo functionswitchcalculator("Divide", 4, 2);
