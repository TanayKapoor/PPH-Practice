<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Enter a number:
        <input type="number" name="number">
        <input type="submit" value="Submit">
    </form>
</body>

<?php
if ($_POST) {
    $number = $_POST['number'];
    if (($number < 10)) {
        echo "$number smaller than 10";
    } else if (($number > 10)) {
        echo "$number greater than 10";
    } else {
        echo "$number is equal to 10";
    }
}

?>

</html>