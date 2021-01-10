<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<body>
    <form Method="post">
        <br><br>
        Enter number:<input type="text" name="value" /><br><br>
        <input type="submit" name="btn" value="print table" />

    </form>
    <?php
    if (isset($_POST['btn'])) {
        $n = $_POST['value'];
        $res = 0;
        for ($i = 1; $i <= 10; $i++) {
            $res = $n * $i;
            echo $n;
            echo "*";
            echo $i;
            echo "=";
            echo $res;
            echo "<br>";
        }
    }
    ?>
</body>

</html>