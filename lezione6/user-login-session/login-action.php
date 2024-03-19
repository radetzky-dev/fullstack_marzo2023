<?php

if (!empty ($_POST["login"])) {
    session_start();

    if ($_POST['user_name'] == 'admin' && $_POST['password'] == 'admin') {
        $_SESSION["userId"] = 'admin';
    } else {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }
    header("Location: ./index.php");
}
