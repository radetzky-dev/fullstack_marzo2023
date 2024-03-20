<?php
session_start();
$_SESSION["user_id"] = "";
$_SESSION["role"] = "";
session_destroy();

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'login.php';
header("Location: http://$host$uri/$extra");
