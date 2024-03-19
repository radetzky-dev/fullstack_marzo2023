<?php
session_start();
if (empty ($_SESSION["userId"])) {

    echo "<a href='index.php'>Login</a>";
    die();
} else {
    echo '<a href="index.php">Torna indietro</a><br>';
    if ($_SESSION["role"] == "user") {
        echo "Mi spiace questa pagina è riservata agli amministratori!<br>";
        die();
    } else { ?>
        <h3>SOLO PER AMMINISTRATORI</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus adipisci quidem ea quo libero itaque est
            doloremque. Officia accusamus officiis iusto? Possimus, perspiciatis rerum temporibus ullam dolorem voluptas? Sunt,
            repellendus?</p>
        <?php
    }
}

