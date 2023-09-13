<?php
    if (!($_POST['login'] == $_COOKIE['login'] && password_verify($_POST['password'], $_COOKIE['encryptedPassword']) && $_POST['email'] == $_COOKIE['email'])) {
        setcookie('login', null, time() - 3600);
        setcookie('password', null, time() - 3600);
        setcookie('encryptedPassword', null, time() - 3600);
        setcookie('email', null, time() - 3600);
    }

    setcookie('errorLogin', null, time() - 3600);
    setcookie('errorPassword', null, time() - 3600);
    setcookie('errorEmail', null, time() - 3600);

    $isOk = true;

    if (!isset($_POST['login'])) {
        setcookie('errorLogin', 'Incorrect login!');
        $isOk = false;
    } else {
        setcookie('login', $_POST['login']);
    }

    // Проводимо таку ж перевірку для паролю
    if (!isset($_POST['password']) || mb_strlen($_POST['password']) < 8) {
        setcookie('errorPassword', 'Incorrect password!');
        $isOk = false;
    } else {
        setcookie('password', $_POST['password']);
        setcookie('encryptedPassword', password_hash($_POST['password'], PASSWORD_DEFAULT));
    }

    // Проводимо таку ж перевірку для email
    if (!$_POST['email']) {
        setcookie('errorEmail', 'Incorrect email!');
        $isOk = false;
    } else {
        setcookie('email', $_POST['email']);
    }

    if ($isOk) {
        header('Location: main.php');
    } else {
        header('Location: index.php');
    }

    exit;
?>
