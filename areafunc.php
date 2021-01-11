<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <h4>For Circle</h4>
        Enter radius of circle: <input type="number" name="radius"></br>
        <h4>For rectangle</h4>
        Enter length of rectangle: <input type="number" name="length"></br>
        Enter breadth of rectangle: <input type="number" name="breadth"></br>
        <h4>For Triangle</h4>
        Enter height of triangle: <input type="number" name="height"></br>
        Enter base of triangle: <input type="number" name="base"></br>
        <input type="submit" value="ok">
    </form>

    <?php
    $radius = $_POST['radius'];
    $lrect = $_POST['length'];
    $brect = $_POST['breadth'];
    $theight = $_POST['height'];
    $tbase = $_POST['base'];
    function circle($r)
    {
        $area = 3.14 * $r * $r;
        echo "Area of circle is " . $area . "</br>";
    }

    function rectangle($l, $br)
    {
        $area = $l * $br;
        echo "Area of rectangle is: " . $area . "</br>";
    }

    function triangle($h, $b)
    {
        $area = 0.5 * $h * $b;
        echo "Area of triangle is: " . $area . "</br>";
    }

    echo circle($radius);
    echo rectangle($lrect, $brect);
    echo triangle($theight, $tbase);

    ?>
</body>