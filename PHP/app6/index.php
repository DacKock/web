<?php
    require_once "isAuthorized.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Авторизація</title>
    </head>
    <body>
    <form class="authForm" method="post" action="authorization.php">
        <input type="text" name="login"  placeholder="Enter login" value="<?= $_COOKIE['login'] ?? '' ?>">
        <div><?= $_COOKIE['errorLogin'] ?? '' ?></div>
        <input type="password" name="password"  placeholder="Enter password" value="<?= $_COOKIE['password'] ?? '' ?>">
        <div><?= $_COOKIE['errorPassword'] ?? '' ?></div>
        <input class="input email" name="email" type="email" placeholder="Enter email" value="<?= $_COOKIE['email'] ?? '' ?>">
        <div><?= $_COOKIE['errorEmail'] ?? '' ?></div>
        <input type="submit" value="Авторизуватися">
    </form>
    </body>
</html>
