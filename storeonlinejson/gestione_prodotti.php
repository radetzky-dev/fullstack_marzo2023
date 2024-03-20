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
                    <th>Nome</th>
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
                $dummyImage = "prodotti/dummy.png";
                foreach ($myShopData['items'] as $key => $value) {

                    if (isset ($value['image']) && $value['image'] != "") {
                        $dummyImage = "prodotti/" . $value['image'];
                    }


                    $qta = checkIfLast($value['number']);
                    $price = $value['price'];

                    if ($qta == "ULTIMO") {
                        $oldPrice = "<del>" . $price . " €</del>";
                        $price = calculateDiscount($price, 12.5);
                        $price = $oldPrice . '<br><b>' . $price . '</b>';
                        $qta = "<b>ULTIMO</b>";
                    }

                    $buttonStatus = "";
                    if ($qta == "ESAURITO") {
                        $qta = "<span class='text-danger'>ESAURITO</span>";
                        $buttonStatus = "disabled"; //TODO sul bottone compra che va disabilitato
                    }

                    $admin = "";
                    if (isset ($_SESSION["role"]) && $_SESSION["role"] == "admin") {
                        $admin = "<a href='insert_product.php?op=update&id=" . $value['id'] . "' class='btn btn-primary'>Modifica prodotto</a>
                        <a href='delete_product.php?op=delete&id=" . $value['id'] . "' class='btn btn-primary'>Elimina prodotto</a>"; //TODO chiedere conferma con un popup
                    }

                    echo "<tr><td><img src='$dummyImage' alt=" . $value['name'] . "></td><td>" . $value['name'] . "</td><td>$qta</td><td>" . $value['description'] . "</td><td>$price €" . "</td><td class='table-primary'>" . strtoupper($value['category']) . "</td>
                        <td>
                        <a href='#' class='btn btn-primary'>Compra</a> $admin</td>
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