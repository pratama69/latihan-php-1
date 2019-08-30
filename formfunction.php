<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luas Persegi</title>
</head>
<body>
<fieldset>
    <legend>Luas Persegi</legend>
    <form action="" method="get">
    <label for="">Sisi</label>
    <input type="number" min="1" name="s" required>
    <br>
    <input type="submit" name="simpan" value="simpan">
    </form>
</fieldset>

<?php
if (isset($_GEST['simpan'])) {
    $sisi = $_GET['s'];

    function luas_persegi($s) {
        $luas = $s * $s;
        return $luas;
    }

    $luas = luas_persegi($sisi);
    echo "Luas Persegi : $luas";
}
    ?>
</body>
</html>