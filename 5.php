<?php
function kelompokkanBilangan($array1, $array2) {
    // Kelompok pertama: bilangan yang ada di kedua variabel (intersection)
    $kelompokPertama = array_intersect($array1, $array2);

    // Kelompok kedua: bilangan yang tidak ada di kedua variabel (symmetric difference)
    $kelompokKedua = array_merge(array_diff($array1, $array2), array_diff($array2, $array1));

    // Tampilkan hasil
    echo "Bilangan yang ada di kedua variabel:<br>";
    echo implode(", ", $kelompokPertama) . "<br>";

    echo "Bilangan yang tidak ada di kedua variabel:<br>";
    echo implode(", ", $kelompokKedua) . "<br>";
}

// Contoh penggunaan
$array1 = [77, 55, 90, 80, 65];
$array2 = [55, 90, 89, 12, 86, 77];

kelompokkanBilangan($array1, $array2);
?>
