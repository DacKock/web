<?php
    if (isset($_COOKIE['login'], $_COOKIE['password'], $_COOKIE['encryptedPassword'], $_COOKIE['email'])) {
        header('Location: main.php');
        exit;
    }
?>
