<?php
if (isset($_POST['Login'])) {
    $a = $_POST['nama'];
    $b = $_POST['alamat'];
    $c = $_POST['jk'];
    $d = $_POST['agama'];
    $e = $_POST['email'];
    $f = $_POST['password'];
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