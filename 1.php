<?php
function cekAngkaDalamTeks($teks) {
    // Cek apakah teks mengandung angka
    if (preg_match_all('/\d/', $teks, $matches)) {
        // Menggabungkan angka yang ditemukan menjadi string
        $angkaDitemukan = implode(',', $matches[0]);
        echo "Teks mengandung angka: $angkaDitemukan";
    } else {
        echo "Teks tidak mengandung angka";
    }
}

// Contoh penggunaan
$teks = "Ini contoh teks dengan angka 2 dan 4";
cekAngkaDalamTeks($teks);
?>
