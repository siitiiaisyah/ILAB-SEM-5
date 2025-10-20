<?php
    $penghasilan = 1500000;
    $umur = 25;

    if ($penghasilan < 2000000 && $umur >= 21) {
        echo "Berhak menerima bantuan sosial";
    } else {
        echo "Tidak berhak menerima bantuan sosial";
    }
?>