<?php
session_start();
require_once "inc/functions.php";
require_once "inc/header.php";

if (isset ($_SESSION["role"]) && $_SESSION["role"] == "admin") { ?>
    <h3>Menù per la gestione AMMINISTRATORI</h3>
    <p>SCRIEVRE O METTERE LINK PER AMMINISTRATORE</p>
<?php } ?>




<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                QUI TABELLA DOVE MOSTRIAMO 3 PRODOTTI
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Il tuo carrello</h5>
                <table>
                    <thead>
                        <th>Marca</th>
                        <th>Prezzo</th>
                    </thead>

                    <?php
                    $totalCart = 0;
                    if (isset ($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $obj) {
                            $deleteCart = "<tr><td><a href='" . $_SERVER['PHP_SELF'] . "?op=deletecart&id=" . $obj[0] . "'>$deleteIcon" . $obj[2] . "</a></td><td>€ " . $obj[1] . "</td></tr>";
                            $totalCart = $totalCart + $obj[1];
                            echo $deleteCart;
                        }
                    }
                    echo "</table>";
                    ?>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="text" name="amount" id="amount" value="<?php echo $totalCart; ?>" readonly>
                        <button type="submit" class="btn btn-primary">Paga</button>
                    </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once "inc/footer.php";
?>