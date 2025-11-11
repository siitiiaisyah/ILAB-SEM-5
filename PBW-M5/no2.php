<?php
$umur = 20;

if ($umur < 13) {
    $kategori = "Anak-anak";
    $status = "Belum boleh memilih";
} elseif ($umur >= 13 && $umur < 17) {
    $kategori = "Remaja";
    $status = "Belum boleh memilih";
} elseif ($umur >= 17 && $umur <= 60) {
    $kategori = "Dewasa";
    $status = "Boleh memilih";
} else {
    $kategori = "Lansia";
    $status = "Boleh memilih";
}

echo "Umur anda " . $umur . " tahun, anda masuk dalam kategori " . $kategori . " dan anda " . $status;
