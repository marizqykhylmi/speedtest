<?php
function hitungKemunculan($data, $angka) {
    // Hitung jumlah kemunculan angka dalam array
    $jumlah = 0;
    
    foreach ($data as $value) {
        if ($value === $angka) {
            $jumlah++;
        }
    }

    // Tampilkan hasil
    echo "Jumlah angka $angka = $jumlah\n";
}

// Contoh penggunaan
$data = [10, 20, 30, 40, 50, 60, 100, 70, 80, 90, 100];
$angkaDicari = 100;

hitungKemunculan($data, $angkaDicari);
?>
