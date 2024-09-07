<?php
require_once('db.php');
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$passrepeat = filter_var(trim($_POST['passrepeat']), FILTER_SANITIZE_STRING);

$logins = $conn -> query("SELECT * FROM `users` WHERE login = '$login'");
$potentialLogin = $logins -> fetch_assoc();

if (strlen($login) < 3) {
    setcookie('error', 'noLogin', time() + 1, "/");
    header('Location: ../signingUp.php');
    exit();
} else if (strlen($pass) < 5) {
    setcookie('error', 'noPass', time() + 1, "/");
    header('Location: ../signingUp.php');
    exit();
} else if ($pass != $passrepeat) {
    setcookie('error', 'wrongPassRepeat', time() + 1, "/");
    header('Location: ../signingUp.php');
    exit();
} else if ($potentialLogin["login"] === $login) {
    setcookie('error', 'gotLogin', time() + 1, "/");
    header('Location: ../signingUp.php');
    exit();
}

$pass = md5($pass."hehe727");

$conn -> query("INSERT INTO `users` (`login`, `password`, `avatar`) VALUES ('$login', '$pass', 'noAvatar.png')");

setcookie('userLogin', $login, time() + 60 * 60, "/");
setcookie('userAvatar', 'noAvatar.png', time() + 60 * 60, "/");

header('Location: ../profile.php');
?>

