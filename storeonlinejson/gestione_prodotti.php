<?php
session_start();
require_once "inc/functions.php";
require_once "inc/header.php";

?>

<container>
    <div class="container">
        <?php
        if (isset ($_SESSION["role"]) && $_SESSION["role"] == "admin") { ?>
            <a href="add_product.php" class='btn btn-primary'>Aggiungi prodotto</a>
        <?php } ?>

        <table class="table table-bordered" id="tabella">
            <thead class="table-dark">
                <tr>
                    <th>Immagine</th>
                    <th>Qta</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Categoria</th>
                    <th>Buy</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($catalogo as $key => $categorie) {
                    showCategory($catalogo, $key);
                }
                ?>
            </tbody>
        </table>
    </div>
</container>
<?php
require_once "inc/footer.php";
?>