<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter your details</title>
</head>

<body>
    <form method="post">
        <p>Enter your name</p>
        <input type="text" name="name[]">
        <p>Enter your Email</p>
        <input type="text" name="email[]">
        <input type="submit" value="Submit">
    </form>
</body>

<?php
error_reporting(E_ERROR);
$name = $_POST['name'];
$email = $_POST['email'];

foreach ($name as $v) {
    print "Name submitted is: " . $v . "<br>";
}

foreach ($email as $v) {
    print "Email submitted is: " . $v . "<br>";
}
