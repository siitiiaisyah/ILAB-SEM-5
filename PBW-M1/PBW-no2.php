<?php
    $jam_login = 09.30;

    if ($jam_login < 8.00) {
        echo "Tepat Waktu";
    } else if ($jam_login >= 8.00 && $jam_login <= 9.00) {
        echo "Terlambat Ringan";
    } else {
        echo "Terlambat Berat";
    }
?>