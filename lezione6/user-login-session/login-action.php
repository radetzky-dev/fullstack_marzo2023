<?php

if (!empty ($_POST["login"])) {
    session_start();

    if ($_POST['user_name'] == 'admin' && $_POST['password'] == 'admin') {
        $_SESSION["userId"] = 'admin';
        $_SESSION["role"] = "admin";
    } elseif ($_POST['user_name'] == 'user' && $_POST['password'] == 'user') {
        $_SESSION["userId"] = 'user';
        $_SESSION["role"] = "user";
    } else {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }
    header("Location: ./index.php");
}
