<?php
print_r($_REQUEST);
?>
<html>

<head>
    <title>dispaly</title>
</head>

<body>

    <?php
    $first = $_REQUEST['fname'];
    $sub1 = $_REQUEST['sub1'];
    $sub2 = $_REQUEST['sub2'];
    $sub3 = $_REQUEST['sub3'];

    $per = (($sub1 + $sub2 + $sub3) / 300) * 100;

    echo "<center><h2>" . $first . " you scored:" . "<br>" . $per . "%" . "</h2></center>";
    ?>
</body>

</html>