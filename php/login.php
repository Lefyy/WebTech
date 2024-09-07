<?php
require_once("db.php");

$login = $_POST['login'];
$pass = $_POST['pass'];

$pass = md5($pass."hehe727");

$result = $conn->query("SELECT * FROM `users` WHERE login = '$login' AND password = '$pass'");

$user = $result->fetch_assoc();

if (count($user) == 0) {
    setcookie('error', 'wrongLoginOrPass', time() + 1, "/");
    header('Location: ../signingIn.php');
    exit();
}

setcookie('userLogin', $user["login"], time() + 60 * 60, "/");
setcookie('userAvatar', $user["avatar"], time() + 60 * 60, "/");


header('Location: ../profile.php');
?>