<?php
require_once('db.php');
$login = $_COOKIE["userLogin"];
$newpass = filter_var(trim($_POST['newpass']), FILTER_SANITIZE_STRING);
$newpassrepeat = filter_var(trim($_POST['newpassrepeat']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."hehe727");

$user = $conn -> query("SELECT * FROM `users` WHERE login = '$login'");
$potentialUser = $user -> fetch_assoc();

if (strlen($newpass) < 5) {
    setcookie('error', 'noPass', time() + 3, "/");
    header('Location: ../profile.php');
    exit();
} else if ($newpass != $newpassrepeat) {
    setcookie('error', 'wrongPassRepeat', time() + 3, "/");
    header('Location: ../profile.php');
    exit();
} else if ($pass != $potentialUser['password']) {
    setcookie('error', 'wrongPass', time() + 3, "/");
    header('Location: ../profile.php');
    exit();
}

$newpass = md5($pass."hehe727");

$conn -> query("UPDATE `users` SET password='$newpass' WHERE login = '$login' AND password = '$pass'");

header('Location: ../profile.php');
?>