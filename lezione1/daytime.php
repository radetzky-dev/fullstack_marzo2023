<?php
$siteTitle = "Benvenuto";
$name = "Paolo";
?>
<!DOCTYPE html>
<html lang="ita">

<head>
    <title>
        <?php echo $siteTitle . ' ' . $name; ?>
    </title>
</head>

<body>
    <p>
        TIME:
        <?php echo date('H:i'); ?> <br>
        YEAR:
        <?php echo date('Y'); ?>
        <br>
        GIORNO E ORA:
        <?php echo date('d/m/Y H:i'); ?>
    </p>

    <body>