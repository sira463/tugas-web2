<?php
// Array multidimensi
$products = [
    ["nama" => "Pepsodent", "stok" => 30, "harga" => 11980],
    ["nama" => "Sunlight", "stok" => 15, "harga" => 12880],
    ["nama" => "Baygon", "stok" => 10, "harga" => 16779],
    ["nama" => "Dove", "stok" => 20, "harga" => 22688],
    ["nama" => "Rinso", "stok" => 20, "harga" => 20769],
    ["nama" => "Downy", "stok" => 15, "harga" => 12880],
    ["nama" => "Le Mineral", "stok" => 25, "harga" => 5650]
];

// Tampilkan tabel dari array multidimensi
echo "<h3>Tabel dari Array Multidimensi</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>";

foreach ($products as $product) {
    $jumlah = $product['stok'] * $product['harga'];
    echo "<tr>
            <td>{$product['nama']}</td>
            <td>{$product['stok']}</td>
            <td>" . number_format($product['harga'], 0, ',', '.') . "</td>
            <td>" . number_format($jumlah, 0, ',', '.') . "</td>
          </tr>";
}

echo "</table>";
?>