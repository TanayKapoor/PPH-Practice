<?php
print_r($_GET);
?>
<html>

<head>
    <title>dispaly</title>
</head>

<body>

    <h1>Display result </h1>
    <?php
    $first = $_GET['fname'];
    $sub1 = $_GET['sub1'];
    $sub2 = $_GET['sub2'];
    $sub3 = $_GET['sub3'];

    $per = (($sub1 + $sub2 + $sub3) / 300) * 100;

    echo "<center><h2>" . $first . " you scored:" . "<br>" . $per . "%" . "</h2></center>";
    ?>
</body>

</html>