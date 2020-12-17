<?php
function secondlarge($num1, $num2, $num3) 
{
    if($num1>=$num2 && $num1>=$num3)
    {
        if($num2 >= $num3)
        {
            echo $num2;
        }
        else{
            echo $num3;
        }
    }
    else if ($num2 >= $num1 && $num2 >= $num3)
    {
        if($num1 >= $num3)
        {
            echo $num1;
        }
        else{
            echo $num3;
        }
    }
    else if ($num1 >= $num2)
        {
        echo $num1;
        }
        else
        {
            echo $num2;
        }

}

echo secondlarge(1, 2, 3)."<br>";
echo secondlarge(1, 3, 2)."<br>";
echo secondlarge(1, 1, 1)."<br>";
echo secondlarge(1, 2, 2)."<br>";