<?php

if (empty ($_SESSION["userId"])) {
    echo "<a href='../index.php'>Login</a>";
    die();
}
?>
<html>

<head>
    <title>User Login</title>
    <link href="./view/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="phppot-container text-center">
        Welcome <b>
            <?php echo $_SESSION["userId"]; ?>
        </b>, You have successfully
        logged in!<br>
        QUI PUOI VEDERE LE TUE INFORMAZIONI PERSONALI!
        <br>
        Click to <a href="./logout.php">Logout.</a>
    </div>
</body>

</html>