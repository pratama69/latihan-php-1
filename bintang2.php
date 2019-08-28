<?php
if (isset($_POST['Input'])) {
    $bintang = $_POST['bt'];
    for($a=1; $a<=$bintang; $a++){
    for($b=$bintang; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}
}
    echo "Jumlah Bintang : $bintang";   
?>