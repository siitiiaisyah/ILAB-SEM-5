<?php
// Inisialisasi array skor pemain
$skor = [90, 85, 70, 100, 95];

// Menampilkan semua skor pemain
echo "Skor Pemain: ";
for ($i = 0; $i < count($skor); $i++) {
    echo $skor[$i];
    if ($i < count($skor) - 1) {
        echo ", ";
    }
}
echo "<br>";

// Menghitung rata-rata skor
$total_skor = 0;
foreach ($skor as $nilai) {
    $total_skor += $nilai;
}
$rata_rata = $total_skor / count($skor);

echo "Rata-rata Skor: " . $rata_rata . "<br>";

// Mencari skor tertinggi dan terendah
$skor_tertinggi = max($skor);
$skor_terendah = min($skor);

echo "Skor Tertinggi: " . $skor_tertinggi . "<br>";
echo "Skor Terendah: " . $skor_terendah . "<br>";
?>