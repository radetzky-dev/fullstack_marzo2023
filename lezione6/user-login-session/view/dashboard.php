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
        <h3>Informazioni pratiche</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni iure animi optio ex nostrum distinctio. Quam
            non omnis perspiciatis. Quae qui obcaecati dolorem magni dolor quod nisi ullam tempore temporibus?</p>

        <?php
        if ($_SESSION["role"] == "admin") { ?>
            <h3>Menù per la gestione AMMINISTRATORI</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti placeat quo, repellendus eveniet facere
                tempora asperiores suscipit vitae aspernatur quisquam? Hic perspiciatis aperiam nulla magni iste labore
                provident voluptates nostrum?</p>
            <a href="gestisci.php">Gestisci</a>
        <?php }
        ?>

        <?php
        if ($_SESSION["role"] == "user") { ?>
            <h3>AVVERTENZA PER GLI UTENTI</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti placeat quo, repellendus eveniet facere
                tempora asperiores suscipit vitae aspernatur quisquam? Hic perspiciatis aperiam nulla magni iste labore
                provident voluptates nostrum?</p>
        <?php } ?>

        <h4>INFORMAZIONI PERSONALI</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti placeat quo, repellendus eveniet facere
            tempora asperiores suscipit vitae aspernatur quisquam? Hic perspiciatis aperiam nulla magni iste labore
            provident voluptates nostrum?</p>

        <br>
        Click to <a href="./logout.php">Logout.</a>
    </div>
</body>

</html>