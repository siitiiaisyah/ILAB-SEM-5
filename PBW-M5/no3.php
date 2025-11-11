<?php
$angka = 1;

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $angka . " ";
        $angka++;
    }
    echo "<br>";
}
?>
