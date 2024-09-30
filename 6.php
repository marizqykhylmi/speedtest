<?php
$student = [
    [
        'nama' => 'andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

function hitungRataRata($students) {
    foreach ($students as $student) {
        $rataRata = array_sum($student['nilai']) / count($student['nilai']);
        // Tampilkan output sesuai format yang diminta
        echo "{$student['nama']} = " . number_format($rataRata, 1) . "<br>";
    }
}

// Jalankan fungsi
hitungRataRata($student);
?>
