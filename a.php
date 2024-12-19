<?php
// Array satu dimensi
$nama_produk = ["Pepsodent", "Sunlight", "Baygon", "Dove", "Rinso", "Downy", "Le Mineral"];
$stok_produk = [30, 15, 10, 20, 20, 12, 25];
$harga_produk = [11980, 12880, 16779, 22688, 20789, 12880, 5650];

echo "<h3>table Produk</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>";

$totalKeseluruhan = 0; // Inisialisasi total keseluruhan

for ($i = 0; $i < count($nama_produk); $i++) {
    $jumlah = $stok_produk[$i] * $harga_produk[$i];
    $totalKeseluruhan += $jumlah; // Tambahkan jumlah ke total keseluruhan
    echo "<tr>
            <td>{$nama_produk[$i]}</td>
            <td>{$stok_produk[$i]}</td>
            <td>Rp " . number_format($harga_produk[$i], 0, ',', '.') . "</td>
            <td>Rp " . number_format($jumlah, 0, ',', '.') . "</td>
          </tr>";
}

// Tampilkan total keseluruhan di bawah tabel
echo "<tr>
        <td colspan='3' align='right'><strong>Total Keseluruhan</strong></td>
        <td><strong>Rp " . number_format($totalKeseluruhan, 0, ',', '.') . "</strong></td>
      </tr>";

echo "</table>";
?>
