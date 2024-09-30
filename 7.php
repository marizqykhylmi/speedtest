<?php
function bandingkanNama($nama1, $nama2) {
    // Hitung jumlah karakter untuk masing-masing nama
    $jumlahKarakter1 = strlen($nama1);
    $jumlahKarakter2 = strlen($nama2);

    // Tampilkan jumlah karakter
    echo "Jumlah karakter nama pertama: $jumlahKarakter1<br>";
    echo "Jumlah karakter nama kedua: $jumlahKarakter2<br>";

    // Bandingkan jumlah karakter dan tampilkan hasil
    if ($jumlahKarakter1 > $jumlahKarakter2) {
        $selisih = $jumlahKarakter1 - $jumlahKarakter2;
        echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2: selisih $selisih karakter<br>";
    } elseif ($jumlahKarakter1 < $jumlahKarakter2) {
        $selisih = $jumlahKarakter2 - $jumlahKarakter1;
        echo "$nama2 memiliki jumlah karakter lebih banyak dari $nama1: selisih $selisih karakter<br>";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.<br>";
    }
}

// Contoh penggunaan
$namaPertama = "fema flamelina putri";
$namaKedua = "artasya legina";

bandingkanNama($namaPertama, $namaKedua);
?>
