<?php
function tampilkanPerkalianLima() {
    for ($i = 1; $i * 5 <= 55; $i++) {
        $hasil = $i * 5;

        // Cek apakah hasil mengandung angka 0
        if (strpos((string)$hasil, '0') !== false) {
            continue; // Lewati angka yang mengandung 0
        }

        echo "$i x 5 = $hasil<br>";
    }
}

// Jalankan fungsi
tampilkanPerkalianLima();
?>
