<?php
require_once('db.php');
$login = $_COOKIE["userLogin"];
$newlogin = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."hehe727");

$user = $conn -> query("SELECT * FROM `users` WHERE login = '$login'");
$User = $user -> fetch_assoc();

$potentialuser = $conn -> query("SELECT * FROM `users` WHERE login = '$newlogin'");
$potentialUser = $potentialuser -> fetch_assoc();

if (strlen($newlogin) < 3) {
    setcookie('error', 'noLogin', time() + 3, "/");
    header('Location: ../profile.php');
    exit();
} else if ($pass != $User['password']) {
    setcookie('error', 'wrongPass', time() + 3, "/");
    header('Location: ../profile.php');
    exit();
} else if ($potentialUser['login'] === $newlogin) {
    setcookie('error', 'gotLogin', time() + 3, "/");
    header('Location: ../profile.php');
    exit();
}

$conn -> query("UPDATE `users` SET login='$newlogin' WHERE login = '$login' AND password = '$pass'");

setcookie('userLogin', $newlogin, time() + 60 * 60, "/");

header('Location: ../profile.php');
?>