<?php
$count = 0;
$num = 2;
while ($count < 15) {
    $temp_count = 0;
    for ($i = 1; $i <= $num; $i++) {
        if (($num % $i) == 0) {
            $temp_count++;
        }
    }
    if ($temp_count < 3) {
        echo $num . " , ";
        $count = $count + 1;
    }
    $num = $num + 1;
}
?>