<?php
function tampilkanPerkalianTerbalik() {
    for ($j = 1; $j <= 2; $j++) {        // Kolom (angka kedua hanya sampai 2)
        for ($i = 10; $i >= 1; $i--) {   // Baris (angka pertama, terbalik)
            $hasil = $i * $j;
            echo "$i x $j = $hasil<br>";
        }
        echo "<br>";  // Tambahkan baris kosong untuk memisahkan tiap kolom
    }
}

// Jalankan fungsi
tampilkanPerkalianTerbalik();
?>
