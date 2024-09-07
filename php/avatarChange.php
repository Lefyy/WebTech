<?php
    require_once('db.php');

    if (isset($_POST['changeAvatar'])) {
        $avatar = $_FILES['avatar'];
        $login = $_COOKIE["userLogin"];
        $result = $conn->query("SELECT * FROM `users` WHERE login = '$login'");
        $user = $result->fetch_assoc();
        $type = $avatar['type'];
        $name = $login . "." . $user['id'] . "." . substr($type, strlen("image/"));
        if (checkAvatar($avatar)) {
            if (loadAvatar($avatar, $user)) {
                $conn -> query("UPDATE `users` SET avatar='$name' WHERE login = '$login'");
                setcookie('userAvatar', $name, time() + 60 * 60 * 24 * 365 * 10, "/");
            }
        }
    }

    function checkAvatar($avatar) {
        $name = $avatar['name'];
        $type = $avatar['type'];
        $size = $avatar['size'];
        if (($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg")) {
            setcookie('error', 'badImage', time() + 1, "/");
            header('Location: ../profile.php');
            exit();
            return false;
        }
        if (($size > 50 * 1024 * 1024)) {
            setcookie('error', 'badImage', time() + 1, "/");
            header('Location: ../profile.php');
            exit();
            return false;
        }
        return true;
    }

    function loadAvatar($avatar, $user) {
        $login = $_COOKIE["userLogin"];
        $type = $avatar['type'];
        $name = $login . "." . $user['id'] . "." . substr($type, strlen("image/"));
        $dir = "../uploads/";
        $uploadfile = $dir . $name;

        if (!(move_uploaded_file($avatar['tmp_name'], $uploadfile))) {
            setcookie('error', 'badMove', time() + 1, "/");
            header('Location: ../profile.php');
            exit();
            return false;  
        }

        return true;
    }


    
    header('Location: ../profile.php');
?>