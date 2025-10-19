<?php
    $angka1 = 12;
    $angka2 = 4;
    $operator = '*'; // Ubah sesuai kebutuhan: '+', '-', '*', '/'

    if ($operator == '+') {
        $hasil = $angka1 + $angka2;
        echo "$angka1 + $angka2 = $hasil";
    } else if ($operator == '-') {
        $hasil = $angka1 - $angka2;
        echo "$angka1 - $angka2 = $hasil";
    } else if ($operator == '*') {
        $hasil = $angka1 * $angka2;
        echo "$angka1 * $angka2 = $hasil";
    } else if ($operator == '/') {
        if ($angka2 != 0) {
            $hasil = $angka1 / $angka2;
            echo "$angka1 / $angka2 = $hasil";
        } else {
            echo "Pembagian dengan nol tidak diperbolehkan";
        }
    } else {
        echo "Operator tidak valid";
    }
?>