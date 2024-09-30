<?php
function hitungKompensasi($jamMulaiKerja, $jamPulangKerja) {
    // Konversi jam kerja ke format 24 jam
    $jamKerja = $jamPulangKerja - $jamMulaiKerja;
    $jamNormal = 8; // Jam kerja normal
    $kompensasi = 0;
    
    // Jika jam kerja lebih dari 8 jam, hitung jam lebihnya
    if ($jamKerja > $jamNormal) {
        $jamLebih = $jamKerja - $jamNormal;

        // Satu jam pertama kompensasinya Rp 50.000
        if ($jamLebih >= 1) {
            $kompensasi += 50000;
            $jamLebih--;
        }

        // Jam berikutnya kompensasi Rp 25.000 per jam
        if ($jamLebih > 0) {
            $kompensasi += $jamLebih * 25000;
        }

        echo "Lama kerja: $jamKerja jam<br>";
        echo "Jam lebih: " . ($jamKerja - $jamNormal) . " jam<br>";
        echo "Jumlah kompensasi: Rp " . number_format($kompensasi, 0, ',', '.') . "\n";
    } else {
        echo "Tidak ada jam lembur. Lama kerja: $jamKerja jam<br>";
    }
}

// Contoh penggunaan
$jamMulaiKerja = 8; // Jam mulai kerja (8 pagi)
$jamPulangKerja = 22; // Jam pulang kerja (10 malam)

hitungKompensasi($jamMulaiKerja, $jamPulangKerja);
?>
