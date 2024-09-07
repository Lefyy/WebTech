<?php
require_once("db.php");
if (isset($_POST['deleteAccount'])) {
    $login = $_COOKIE['userLogin'];

    $conn->query("DELETE FROM `users` WHERE login = '$login'");

    setcookie('userLogin', '1', time() - 60, "/");
    setcookie('userAvatar', '1', time() - 60, "/");
}

header('Location: ../index.php');
?>