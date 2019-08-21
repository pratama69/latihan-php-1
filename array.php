<?php
// array key numerik
$a = array('nanda', 21, true, 14.45);
echo $a[1];

for ($i = 4; $i >= 0; $i--) {
    echo $a[$i] . "<br>";
}

// array key asosiatif
$aso = ['nama' => 'nanda', 'umur' => 16,
         'alamat' => 'bandung'];

foreach ($aso as $index) {
    echo $index . "<br>";
}
?>