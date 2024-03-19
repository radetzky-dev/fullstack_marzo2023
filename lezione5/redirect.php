<?php

$host = $_SERVER['HTTP_HOST'];

echo $_SERVER['SERVER_NAME'];

echo "<br>" . $host;

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

die();

$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'form1.php';
header("Location: http://$host$uri/$extra");
exit;