<?php
$karyawan = [
    [
        "id_karyawan" => "K001",
        "nama_karyawan" => "Aisyah",
        "jabatan" => "Frontend Developer",
        "proyek" => [
            ["nama_proyek" => "Landing Page Produk", "durasi" => 5],
            ["nama_proyek" => "Dashboard Admin", "durasi" => 7],
        ]
    ],
    [
        "id_karyawan" => "K002",
        "nama_karyawan" => "Rizki",
        "jabatan" => "Backend Developer",
        "proyek" => [
            ["nama_proyek" => "API Payment Gateway", "durasi" => 6],
            ["nama_proyek" => "Sistem Login User", "durasi" => 4],
            ["nama_proyek" => "Integrasi Database", "durasi" => 5],
        ]
    ],
    [
        "id_karyawan" => "K003",
        "nama_karyawan" => "Lina",
        "jabatan" => "Project Manager",
        "proyek" => [
            ["nama_proyek" => "Manajemen Proyek Internal", "durasi" => 8],
            ["nama_proyek" => "Koordinasi Tim Klien", "durasi" => 3],
        ]
    ],
    [
        "id_karyawan" => "K004",
        "nama_karyawan" => "Bima",
        "jabatan" => "UI/UX Designer",
        "proyek" => [
            ["nama_proyek" => "Desain Mobile App", "durasi" => 9],
            ["nama_proyek" => "Revamp Website Lama", "durasi" => 5],
            ["nama_proyek" => "Prototype Fitur Baru", "durasi" => 4],
        ]
    ],
];

$maxDurasi = 0;
$karyawanTerbanyak = "";

// Tampilkan data
echo "<h2>Daftar Karyawan dan Proyek</h2>";

foreach ($karyawan as $data) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px; border-radius:8px; width:450px;'>";
    echo "<strong>ID Karyawan:</strong> {$data['id_karyawan']}<br>";
    echo "<strong>Nama:</strong> {$data['nama_karyawan']}<br>";
    echo "<strong>Jabatan:</strong> {$data['jabatan']}<br>";
    echo "<strong>Daftar Proyek:</strong><br>";

    $totalDurasi = 0;
    echo "<ul style='margin-top:5px;'>";
    foreach ($data['proyek'] as $proyek) {
        echo "<li>{$proyek['nama_proyek']} ({$proyek['durasi']} minggu)</li>";
        $totalDurasi += (int)$proyek['durasi'];
    }
    echo "</ul>";

    echo "<strong>Total Durasi Proyek:</strong> {$totalDurasi} minggu<br>";
    echo "</div>";

    if ($totalDurasi > $maxDurasi) {
        $maxDurasi = $totalDurasi;
        $karyawanTerbanyak = $data['nama_karyawan'];
    }
}

echo "<hr>";
echo "<h3>Karyawan dengan total durasi proyek terbanyak:</h3>";
echo "<p><strong>{$karyawanTerbanyak}</strong> ({$maxDurasi} minggu)</p>";
?>
