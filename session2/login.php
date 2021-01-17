<?php
session_start();
if (!empty($_POST) && $_POST['user'] === 'tanay' && $_POST['pass'] === 'abcd') {
    $_SESSION['logged_in'] = true;
    header('Location: /index.php');
} else {
?>

    <form method="POST">
        Username: <input name="user" type="text"><br>
        Password: <input name="pass" type="text"><br><br>
        <input type="submit" value="submit">
    </form>

<?php
}
