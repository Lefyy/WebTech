<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registerUser";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("База данных не подключилась" . mysqli_connect_error());
}

?>