<?php
$str = 'Hello World!';
$pattern = '/World/i';
echo preg_replace($pattern, 'Universe', $str) . "\n";
