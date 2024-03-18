<?php

echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";

$img_path = "";
if (
    $_SERVER['REQUEST_METHOD'] == 'POST'
    && array_key_exists('toProcess', $_FILES)
) {
    $pathToFile = 'assets/';
    if (is_uploaded_file($_FILES['toProcess']['tmp_name'])) {
        echo "file caricato con successo";
        $fileName = $_FILES['toProcess']['name'];
        if (is_dir($pathToFile))
            move_uploaded_file($_FILES['toProcess']['tmp_name'], $pathToFile . $fileName);

        $img_path = $pathToFile . $fileName;
    } else {
        echo "file non caricato";
    }
}

?>
<html>

<head>
    <title>File Upload</title>
</head>

<body>
    <?php
    if ($img_path != "") { ?>
        <img src="<?php echo $img_path; ?>" width=250>
        <?php
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="POST">
        Name: <input type="text" name="something">
        File name: <input type="file" name="toProcess">
        <input type="submit" value="Upload">
    </form>
</body>

</html>