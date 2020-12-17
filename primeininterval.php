<?php
function prime($num1, $num2)
{
    for ($i= $num1+1; $i<$num2; ++$i)
    {
        $temp_var=0;
        for($j=2; $j<=$i/2; ++$j)
        {
            if($i%$j==0)
            {
                $temp_var=1;
                break;
            }
        }
        if($temp_var==0)
        echo $i."<br>";
    }
}
echo prime(50, 100);
