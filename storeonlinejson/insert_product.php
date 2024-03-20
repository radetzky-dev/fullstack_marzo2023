<?php
session_start();
require_once "inc/functions.php";
require_once "inc/header.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $myFile = readContentFile($pathData);
    $myShopData = json_decode($myFile, true);

    //caricare immagine insieme al prodotto

    $imgProduct = "";
    /* echo "<pre>";
     print_r($_SERVER);
     echo "</pre>"; */

    // var_dump($_FILES);
    if ($_FILES) {
        $uploadDir = __DIR__ . '/prodotti';
        foreach ($_FILES as $file) {
            if (UPLOAD_ERR_OK === $file['error']) {
                $fileName = basename($file['name']);
                echo $fileName . '<br>';
                $result = move_uploaded_file($file['tmp_name'], $uploadDir . DIRECTORY_SEPARATOR . $fileName);
                if ($result) {
                    $dummyPhoto = "uploads" . DIRECTORY_SEPARATOR . $fileName;
                    $dummyPhoto = "prodotti/" . $fileName;
                    $imgProduct = $fileName;
                } else {
                    echo '<br>ERRORE NEL CARICAMENTO DELL\'IMMAGINE!<br>';
                }
            }
        }
    }
    // echo $imgProduct . '<br>';

    $newElem = ['id' => uniqid(), 'name' => $_REQUEST['name'], 'description' => $_REQUEST['description'], 'category' => $_REQUEST['category'], 'price' => $_REQUEST['price'], 'number' => $_REQUEST['qta'], 'image' => $imgProduct];


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
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="testo">Qta</label>
                                    <input type="number" class="form-control" id="qta" name="qta" placeholder="1" required>
                                    <label for="testo">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="nome prodotto" required>

                                    <label for="testo">Descrizione</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="description" required>

                                    <label for="testo">Categoria</label>
                                    <input type="text" class="form-control" id="category" name="category"
                                        placeholder="categoria" required>
                                    <label for="testo">Price</label>
                                    <input type="number" step="0.01" class="form-control" id="price" name="price"
                                        placeholder="price" required>

                                    <label for="exampleInputBirthDate">Carica la foto</label>
                                    <input type="file" name="file" class="form-control" required>

                                    <input type="text" id="operation" name="operation" value="insertproduct" hidden />
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo $addIcon; ?>
                                    </button>
                                </div>
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