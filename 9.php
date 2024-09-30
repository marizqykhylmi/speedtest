<?php
function hitungPecahanUang($jumlahUang) {
    // Daftar pecahan uang
    $pecahan = [
        100000 => 0,
        50000  => 0,
        20000  => 0,
        10000  => 0,
        5000   => 0,
        2000   => 0,
        1000   => 0,
        500    => 0,
    ];

    // Hitung pecahan uang
    foreach ($pecahan as $nilai => &$jumlah) {
        if ($jumlahUang >= $nilai) {
            $jumlah = intval($jumlahUang / $nilai); // Hitung jumlah lembar
            $jumlahUang -= $jumlah * $nilai; // Kurangi jumlah uang
        }
    }

    // Tampilkan hasil
    echo "Lempar rupiah:\n";
    foreach ($pecahan as $nilai => $jumlah) {
        if ($jumlah > 0) {
            echo "Rp" . number_format($nilai, 0, ',', '.') . " : $jumlah<br>";
        }
    }
}

// Contoh penggunaan
$jumlahUang = 141500;
hitungPecahanUang($jumlahUang);
?>
