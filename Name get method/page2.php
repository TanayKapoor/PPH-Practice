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
    $last = $_GET['lname'];

    echo "<center><h2> The name of the person is " . $first . " " . $last . "</h2></center>";
    ?>
</body>

</html>