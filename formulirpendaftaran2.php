<?php
if (isset($_POST['Login'])) {
    $a = $_POST['nopen'];
    $b = $_POST['nisn'];
    $c = $_POST['nama'];
    $d = $_POST['alamat'];
    $e = $_POST['tela'];
    $f = $_POST['tgl'];
    $g = $_POST['sklh'];
    $h = $_POST['jk'];
    $i = $_POST['jurusan'];
    $j = $_POST['nmaayh'];
    $k = $_POST['krjayh'];
    $l = $_POST['nmaibu'];
    $m = $_POST['krjibu'];
    $n = $_POST[''];
    $o = $_POST[''];
    
    if ($e == "nandajulia@gmail.com" || $f == "130703") {
        echo "<b>Form Register</b> <br>";
        echo "Nama : $a. <br>";
        echo "Alamat : $b. <br>";
        echo "Jenis Kelamin : $c. <br>";
        echo "Agama : $d. <br>";
        echo "Email : $e. <br>";
        echo "Password : $f. <br>";
        echo "Akun Anda Terdaftar/Aktif";
    }else {
        echo "<b>Form Register</b> <br>";
        echo "Nama : $a. <br>";
        echo "Alamat : $b. <br>";
        echo "Jenis Kelamin : $c. <br>";
        echo "Agama : $d. <br>";
        echo "Email : $e. <br>";
        echo "Password : $f. <br>";
        echo "Akun Anda Tidak Terdaftar/Tidak Aktif";
    }
    } 

?>