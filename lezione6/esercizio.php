<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione al sito</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<?php



/**
 * checkNumbersInText
 *
 * @param  mixed $text
 * @param  mixed $fieldName
 * @param  mixed $errors
 * @return bool
 */
function checkNumbersInText(string $text, string $fieldName, string &$errors): bool
{
    if (preg_match("/[^A-Za-z'-]/", $text)) {
        $errors = $errors . "Hai inserito dei caratteri non validi nel <b>$fieldName</b>! Correggilo<br>";
        return false;
    }
    return true;
}

$dummyPhoto = "assets/dummy.png";

$name = $surname = $phone = $anagraficaArray = $company = $qualifica = $dummyName = $email = $birthdate = $dummySurname = $dummyText = $terms = $errors = "";


if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST["nome"]) {
    if (
        (checkNumbersInText($_POST['nome'], "nome", $errors))
        && (checkNumbersInText($_POST['cognome'], "cognome", $errors))
    ) {
        echo "Ciao " . $_POST['nome'] . " " . $_POST['cognome'] . "<br/>";
        //TODO qui mostrerò anche altri dati
        //TODO salverò i dati
    }

    $name = $_POST['nome'];
    $surname = $_POST['cognome'];
}

?>

<body>
    <div class="container">
        <h3>Registration form</h3>

        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $dummyPhoto; ?>" id="profilePhoto" alt="">
                    <div class="card-body">
                        <h5 class="card-title" id="namesurname">
                            <?= $dummyName . ' ' . $dummySurname; ?>
                        </h5>
                        <p class="card-text">
                            <?= $dummyText; ?>
                        </p>
                        <button class="btn btn-primary">Dati corretti: registrami</button>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"
                        id="FormProfilePhoto">
                        <input type="file" name="file">
                        <input type="hidden" name="uploadPhoto" value="uploadPhoto" />
                        <input type="hidden" name="otherFormInfo" value="<?= $anagraficaArray; ?>" />
                        <input type="submit" name="upload" value="Carica foto profilo">
                    </form>
                </div>
            </div>

            <div class="col">
                <div>
                    <?php echo $errors; ?>
                </div>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome"
                            placeholder="Inserisci qui il tuo nome" value="<?= $name ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Cognome"
                            value="<?= $surname ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Società</label>
                        <input type="text" class="form-control" id="societa" name="societa" placeholder="Società (opz)"
                            value="<?= $company ?>">
                    </div>
                    <div class="form-group">
                        <label for="company">Qualifica</label>
                        <input type="text" class="form-control" id="qualifica" name="qualifica"
                            placeholder="Qualifica (opz)" value="<?= $qualifica ?>">
                    </div>
                    <div class="form-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        <label for="exampleInputEmail1">Email</label>

                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                            placeholder="Enter email (opz)" value="<?= $email ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTelephone">Telefono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono"
                            value="<?= $phone ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputBirthDate">Data di nascita</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate"
                            placeholder="Data di nascita" value="<?= $birthdate ?>" required min="1920-01-01"
                            max="<?php //echo getTodayDate();                                         ?>">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="terms" name="terms" <?php
                        if (!empty ($terms)) {
                            echo "checked";
                        }
                        ?> required>
                        <label class="form-check-label" for="exampleCheck1">Accetta i nostri termini di servizio</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>