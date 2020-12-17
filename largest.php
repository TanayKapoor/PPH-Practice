<?php
function large($num1, $num2, $num3) 
{
    if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }
}

echo large(1, 2, 3)."<br>";
echo large(1, 3, 2)."<br>";
echo large(1, 1, 1)."<br>";
echo large(1, 2, 2)."<br>";
