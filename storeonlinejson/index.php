<?php
require_once "inc/header.php";
?>

<script>
    //TODO mettere nel js
    function confirmDelete() {
        return confirm("Sei sicuro di voler cancellare?");
    };
</script>

<table class="table table-bordered" id="tabella">
    <thead thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Qta</th>
            <th>Marca</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
            <th>Categoria</th>
            <th>Buy</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php

        /*  if (!isset ($strumentiMusicali)) {
              $myFile = readContentFile($pathData);
              $strumentiMusicali = json_decode($myFile, true);
          }

          $categorie = [];

          foreach ($strumentiMusicali['items'] as $key => $strumenti) {
              foreach ($strumenti as $strumento) {

                  $delete = "<a href='" . $_SERVER['PHP_SELF'] . "?op=delete&id=" . $strumento['id'] . "' class='btn btn-primary' onclick='return confirmDelete();'>$deleteIcon</a>";

                  $buy = "<a href='" . $_SERVER['PHP_SELF'] . "?op=buy&id=" . $strumento['id'] . "&price=" . $strumento['price'] . "&marca=" . $strumento['marca'] . "' class='btn btn-primary'>$cartIcon</a>";

                  echo '<tr><td>' . $strumento['id'] . '</td><td>' . $strumento['number'] . '</td><td>' . strtoupper($strumento['marca']) . ' </td><td>' . $strumento['name'] . '</td><td> ' . $strumento['price'] . '</td><td><strong>' . strtoupper($key) . '</strong></td><td>' . $buy . '</td><td>' . $delete . '</td></tr>';
                  $categorie[] = $key;

              }

          }
          */
        ?>
    </tbody>
</table>


<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                QUI TABELLA
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