<?php
$a = [0,1,2,3,4,5,6,7,8,9];
for ($i=0; $i < count ($a); ++$i) {
    echo "Data Ke-$i Dengan Index $a[$i] <br>";
}
echo "<br><br><br>";

foreach ($a as $b) {
    echo "Ke-$b <br>";
}
echo "<br><br><br>";

$i = 0;
while ($i <= 10) {
    echo $i++ . " ";
}
echo "<br><br><br>";
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

echo "<br><br><br>";
for ($i=1; $i <= 10 ; $i++) {
    if ($i%2 ==1) {
        $f = "ganjil";
    }
    else{
        $f = "genap";
    }
    echo "$i Adalah bilangan $f <br>";
}
echo "<br><br><br>";

for ($i=1; $i <= 10 ; $i++) {
    echo "_________________<br>";
    echo "Perkalian $i <br>";
    echo "-----------------<br>";
    for ($j=1; $j <= 10 ; $j++) {
        $k = $i *$j;
        if($k%2 == 1){
            $f = "ganjil";
        }
        else {
            $f = "genap";
        }
        echo "$i x $j = $k  adalah $f <br>";
    }
}
?>