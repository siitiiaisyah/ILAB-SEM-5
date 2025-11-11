<?php
$angka = array(10, 20, 30, 40, 50);
$total = 0;
for ($i = 0; $i < count($angka); $i++) {
    $total += $angka[$i];
}
echo "Total semua elemen array adalah: " . $total;
?>
