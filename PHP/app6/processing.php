<?php
    setcookie('login', '', time() - 3600);
    setcookie('password', '', time() - 3600);
    setcookie('encryptedPassword', '', time() - 3600);
    setcookie('email', '', time() - 3600);

    header('Location: index.php');
    exit;
?>
