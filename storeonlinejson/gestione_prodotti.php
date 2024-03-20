<?php
session_start();
require_once "inc/functions.php";
require_once "inc/header.php";

?>

<container>
    <div class="container">
        <?php
        if (isset ($_SESSION["role"]) && $_SESSION["role"] == "admin") { ?>
            <a href="insert_product.php" class='btn btn-primary'>Aggiungi prodotto</a>
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
                $myFile = readContentFile($pathData);
                $myShopData = json_decode($myFile, true);
                foreach ($myShopData['items'] as $key => $value) {
                    echo "<tr><td>" . $value['name'] . "</td><td>" . $value['number'] . "</td><td>" . $value['description'] . "</td><td>" . $value['price'] . " €" . "</td><td class='table-primary'>" . strtoupper($value['category']) . "</td>
                        <td><a href='#' class='btn btn-primary'  >Compra</a></td>
                        </tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</container>
<?php
require_once "inc/footer.php";
?>