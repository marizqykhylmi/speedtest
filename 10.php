<?php
function hitungUsia($usia) {
    // Inisialisasi jumlah kategori
    $jumlahAnak = 0;
    $jumlahDewasa = 0;

    // Hitung jumlah anak dan dewasa
    foreach ($usia as $nilai) {
        if ($nilai < 17) {
            $jumlahAnak++;
        } else {
            $jumlahDewasa++;
        }
    }

    // Tampilkan hasil
    echo "List usia: " . implode(", ", $usia) . "<br>";
    echo "Jumlah kategori dewasa: $jumlahDewasa<br>";
    echo "Jumlah kategori anak-anak: $jumlahAnak<br>";
}

// Contoh penggunaan
$dataUsia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
hitungUsia($dataUsia);
?>
