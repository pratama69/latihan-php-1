<?php
if (isset($_POST['input'])) {
    $a = $_POST['nama'];
    $b = $_POST['almt'];
    $c = $_POST['nmbrng'];
    $e = $_POST['jmlh'];
    $harga_brg = $_POST['harga_brg'];
    $sub_total =$jmlh * $harga_brg;
    }

    if ($jmlh > 10) {
       $total = $sub_total - (0.2 * $sub_total);
    } else if ($jmlh < 5) {
        $total = 0.1 $sub_total;

    }
    if ($jmlh < 0) {
        echo "Nama Costumer : $nama";
    }


    ?>