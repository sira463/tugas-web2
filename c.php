<?php
// Array multidimensi untuk data produk
$products = [
    ["nama" => "Pepsodent", "stok" => 30, "harga" => 11980],
    ["nama" => "Sunlight", "stok" => 15, "harga" => 12880],
    ["nama" => "Baygon", "stok" => 10, "harga" => 16779],
    ["nama" => "Dove", "stok" => 20, "harga" => 22688],
    ["nama" => "Rinso", "stok" => 20, "harga" => 20789],
    ["nama" => "Downy", "stok" => 12, "harga" => 12880],
    ["nama" => "Le Mineral", "stok" => 25, "harga" => 5650]
];

// Tampilkan tabel dari array multidimensi
echo "<h3>Multidimensi</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>";

$totalKeseluruhan = 0; // Inisialisasi total keseluruhan

foreach ($products as $product) {
    $jumlah = $product['stok'] * $product['harga'];
    $totalKeseluruhan += $jumlah; // Tambahkan jumlah ke total keseluruhan
    echo "<tr>
            <td>{$product['nama']}</td>
            <td>{$product['stok']}</td>
            <td>" . number_format($product['harga'], 0, ',', '.') . "</td>
            <td>" . number_format($jumlah, 0, ',', '.') . "</td>
          </tr>";
}

// Tampilkan total keseluruhan di bawah tabel
echo "<tr>
        <td colspan='3' align='right'><strong>Total Keseluruhan</strong></td>
        <td><strong>" . number_format($totalKeseluruhan, 0, ',', '.') . "</strong></td>
      </tr>";

echo "</table>";
?>
