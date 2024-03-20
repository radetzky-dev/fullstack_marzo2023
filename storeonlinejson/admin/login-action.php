<?php
if (!empty ($_POST["login"])) {
    session_start();

    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

    if ($_POST['user_name'] == 'admin' && $_POST['password'] == 'admin') {
        $_SESSION["userId"] = 'admin';
        $_SESSION["role"] = "admin";
    } elseif ($_POST['user_name'] == 'user' && $_POST['password'] == 'user') {
        $_SESSION["userId"] = 'user';
        $_SESSION["role"] = "user";
    } else {
        $_SESSION["errorMessage"] = "Invalid Credentials";
        $extra = 'login.php';
        header("Location: http://$host$uri/$extra");
        die();
    }

    $extra = 'index.php';
    //    echo $uri . '<br>';
    $uri = str_replace("/admin", "", $uri);

    header("Location: http://$host$uri/$extra");

}
