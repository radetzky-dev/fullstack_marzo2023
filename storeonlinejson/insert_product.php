<?php
session_start();
require_once "inc/functions.php";
require_once "inc/header.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $myFile = readContentFile($pathData);
    $myShopData = json_decode($myFile, true);


    $newElem = ['id' => uniqid(), 'name' => $_REQUEST['name'], 'description' => $_REQUEST['description'], 'price' => $_REQUEST['price'], 'number' => $_REQUEST['qta']];

    $myShopData['items'][] = $newElem;

    $jsonString = json_encode($myShopData);
    $result = writeContentIntoFile($pathData, $jsonString);
    echo "Prodotto inserito correttamente!";

}

?>

<container>
    <div class="container">
        <?php
        if (isset ($_SESSION["role"]) && $_SESSION["role"] == "admin") { ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Inserisci prodotto</h5>
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="form-group">
                                    <label for="testo">Qta</label>
                                    <input type="number" class="form-control" id="qta" name="qta" placeholder="1" required>
                                    <label for="testo">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="nome prodotto" required>

                                    <label for="testo">Descrizione</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="description" required>
                                    <label for="testo">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" placeholder="price"
                                        required>
                                </div>
                                <input type="text" id="operation" name="operation" value="insertproduct" hidden />
                                <button type="submit" class="btn btn-primary">
                                    <?php echo $addIcon; ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>


            <?php } else {

            echo "<p>Area riservata</p>";
        } ?>


        </div>
</container>
<?php
require_once "inc/footer.php";
?>