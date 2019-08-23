<?php
if (isset($_POST['input'])) {
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
    $n = $_POST['agama'];
    $o = $_POST['hobi'];
    
    if ($e == "bandung" || $f == "13-07-2003") {
        echo "<b>Form Pendaftaran</b> <br>";
        echo "No Pendaftaran : $a. <br>";
        echo "NISN : $b. <br>";
        echo "Nama : $c. <br>";
        echo "Alamat : $d. <br>";
        echo "Tempat Lahir : $e. <br>";
        echo "Tanggal Lahir : $f. <br>";
        echo "Asal Sekolah : $g. <br>";
        echo "Jenis Kelamin : $h. <br>";
        echo "Jurusan : $i. <br>";
        echo "Nama Ayah : $j. <br>";
        echo "Pekerjaan Ayah : $k. <br>";
        echo "Nama Ibu : $l. <br>";
        echo "Pekerjaan Ibu : $m. <br>";
        echo "Agama : $n. <br>";
        echo "Hobi : $o. <br>";
        echo "Selamat Anda Berhasil Masuk";
    }else {
        echo "<b>Form Pendaftaran</b> <br>";
        echo "No Pendaftaran : $a. <br>";
        echo "NISN : $b. <br>";
        echo "Nama : $c. <br>";
        echo "Alamat : $d. <br>";
        echo "Tempat Lahir : $e. <br>";
        echo "Tanggal Lahir : $f. <br>";
        echo "Asal Sekolah : $g. <br>";
        echo "Jenis Kelamin : $h. <br>";
        echo "Jurusan : $i. <br>";
        echo "Nama Ayah : $j. <br>";
        echo "Pekerjaan Ayah : $k. <br>";
        echo "Nama Ibu : $l. <br>";
        echo "Pekerjaan Ibu : $m. <br>";
        echo "Agama : $n. <br>";
        echo "Hobi : $o. <br>";
        echo "Maaf Silahkan Coba Lagi";
    }
    } 

?>