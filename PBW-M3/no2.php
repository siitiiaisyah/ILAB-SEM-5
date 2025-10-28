<?php
function cek_kelulusan($nilai) {
    if ($nilai >= 75) {
        return "LULUS";
    }
    return "TIDAK LULUS";
}

// Pemanggilan
echo "Nilai 80: " . cek_kelulusan(80) . "<br>";
echo "Nilai 70: " . cek_kelulusan(70) . "<br>";
?>