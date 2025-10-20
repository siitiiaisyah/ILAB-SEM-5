<?php
$baris = 5;

for ($barisSekarang = $baris; $barisSekarang >= 1; $barisSekarang--) {
    for ($angkaKiri = 1; $angkaKiri <= $barisSekarang; $angkaKiri++) {
        echo $angkaKiri . " ";
    }

    $jumlahSpasi = (2 * $baris) - (2 * $barisSekarang);
    for ($s = 0; $s < $jumlahSpasi; $s++) {
        echo "  ";
    }

    $mulaiKanan = $barisSekarang;
    if ($barisSekarang == $baris) {
        $mulaiKanan = $baris - 1;
    }

    for ($angkaKanan = $mulaiKanan; $angkaKanan >= 1; $angkaKanan--) {
        echo $angkaKanan . " ";
    }

    echo "\n";
}
?>