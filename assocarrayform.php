<html>

<body>
    <p>This form is for storing array of Student name with marks for each </p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p><label for="stuname">Name: </label> <input type="text" name="stuname" id="stuname"></p>
        <p><label for="marks1">Marks 1: </label><input type="text" name="marks1" id="marks1"></p>
        <p><label for="marks2">Marks 2: </label><input type="text" name="marks2" id="marks2">
            <input type="submit" value="click to store input">
    </form>

</body>

</html>

<?php
$marks_array = array($_POST['stuname'], $_POST['marks1'], $_POST['marks2']);

print_r($marks_array);
?>