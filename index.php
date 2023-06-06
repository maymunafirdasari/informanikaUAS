<?php

// Menghitung jumlah kalori
$kaloriPerMakan = 2500;

$jumlahMakanPerHari = [
    'senin' => 3,
    'selasa' => 2,
    'rabu' => 2,
    'kamis' => 3,
    'jumat' => 3,
    'sabtu' => 2,
    'minggu' => 1
];

$jumlahMakanPerMinggu = array_sum($jumlahMakanPerHari);
$totalKaloriPerMinggu = $jumlahMakanPerMinggu * $kaloriPerMakan;

echo "Jumlah kalori per minggu: " . $totalKaloriPerMinggu . " kalori\n";

// Menghitung jumlah waktu istirahat
$waktuIstirahatPerHari = [
    'senin' => 5,
    'selasa' => 6,
    'rabu' => 8,
    'kamis' => 8,
    'jumat' => 5,
    'sabtu' => 6,
    'minggu' => 4
];

$waktuIstirahatPerMinggu = array_sum($waktuIstirahatPerHari);

echo "Jumlah waktu istirahat per minggu: " . $waktuIstirahatPerMinggu . " jam\n";

// Menentukan status kesehatan Fu
$kaloriSembuh = 15000; // Jumlah kalori yang diperlukan untuk sembuh (misalnya)

if ($totalKaloriPerMinggu >= $kaloriSembuh && $waktuIstirahatPerMinggu >= 56) {
    echo "Fu sudah sembuh!";
} else {
    echo "Fu masih sakit.";
}

?>