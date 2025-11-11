<?php
// Inisialisasi array asosiatif barang dan harga
$barang = [
    "Susu" => 15000,
    "Roti" => 8000,
    "Air Mineral" => 5000,
    "Mie Instan" => 4000
];

echo "Daftar Barang:<br>";

// Menampilkan semua nama barang dan harganya
foreach ($barang as $nama_barang => $harga) {
    echo $nama_barang . " : " . $harga . "<br>";
}

// Menghitung total harga semua barang
$total_harga = 0;
foreach ($barang as $harga) {
    $total_harga += $harga;
}

echo "<br>Total Harga: " . $total_harga . "<br>";

// Menampilkan jumlah barang
$jumlah_barang = count($barang);
echo "Jumlah Barang: " . $jumlah_barang . "<br>";
?>