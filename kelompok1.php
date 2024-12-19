<?php
function hitungDiskon($jumlahBayar) {
    if ($jumlahBayar >= 500000) {
        $diskon = 0.50; // 50%
    } elseif ($jumlahBayar >= 100000) {
        $diskon = 0.10; // 10%
    } elseif ($jumlahBayar >= 50000) {
        $diskon = 0.05; // 5%
    } else {
        $diskon = 0.00; // Tidak ada diskon
    }

    $jumlahDiskon = $jumlahBayar * $diskon;
    $totalBayar = $jumlahBayar - $jumlahDiskon;

    echo "Jumlah Bayar: Rp " . number_format($jumlahBayar, 0, ',', '.') . "<br>";
    echo "Diskon: " . ($diskon * 100) . "%<br>";
    echo "Total Bayar Setelah Diskon: Rp " . number_format($totalBayar, 0, ',', '.');
}

// Contoh penggunaan
$jumlahBayar = 120000; // Misalnya, pembeli membayar Rp 120.000
hitungDiskon($jumlahBayar);
?>
