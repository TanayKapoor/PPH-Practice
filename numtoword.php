<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number to word</title>
</head>

<body>
    <form method="post">
        Enter a number:
        <input type="number" name="number">
        <input type="submit" value="Submit">
    </form>
</body>

<?php
$number = $_POST['number'];
switch ($number) {
    case 1:
        echo "One";
        break;
    case 2:
        echo "Two";
        break;
    case 3:
        echo "Three";
        break;
    case 4:
        echo "Four";
        break;
    case 5:
        echo "Five";
        break;
    case 6:
        echo "Six";
        break;
    case 7:
        echo "Seven";
        break;
    case 8:
        echo "Eight";
        break;
    case 9:
        echo "Nine";
        break;
    case 10:
        echo "Ten";
        break;
    default:
        echo "Only values in the range 0 to 10 are acceptable";
}
