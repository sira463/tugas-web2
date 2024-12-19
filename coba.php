<?php
// Data barang belanja
$items = [
    ['name' => 'Beras 5 kg', 'quantity' => 1, 'price' => 100000],
    ['name' => 'Minyak Goreng 1L', 'quantity' => 2, 'price' => 25000],
    ['name' => 'Gula Pasir 1 kg', 'quantity' => 1, 'price' => 12000],
    ['name' => 'Teh Celup 25 kantong', 'quantity' => 1, 'price' => 20000],
    ['name' => 'Sabun Mandi', 'quantity' => 3, 'price' => 15000],
];

// Menghitung subtotal
$subtotal = 0;
foreach ($items as $item) {
    $subtotal += $item['quantity'] * $item['price'];
}

// Diskon dan total bayar
$discount = 10000;
$total = $subtotal - $discount;

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Belanja</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; text-align: left; }
    </style>
</head>
<body>
    <h1>Toko XYZ</h1>
    <p>Jl. Raya No. 123</p>
    <p>Kota Kerinci</p>
    <p>Tanggal: <?= date('d F Y') ?></p>
    <p>Waktu: <?= date('H:i') ?></p>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Total</th>
        </tr>
        <?php foreach ($items as $index => $item): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['quantity'] ?></td>
            <td>Rp <?= number_format($item['price'], 0, ',', '.') ?></td>
            <td>Rp <?= number_format($item['quantity'] * $item['price'], 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <p><strong>Subtotal:</strong> Rp <?= number_format($subtotal, 0, ',', '.') ?></p>
    <p><strong>Diskon:</strong> Rp <?= number_format($discount, 0, ',', '.') ?></p>
    <p><strong>Total Bayar:</strong> Rp <?= number_format($total, 0, ',', '.') ?></p>

    <p>Pembayaran: Tunai</p>
    <p>Kembali: Rp <?= number_format(83000, 0, ',', '.') ?></p>
    
    <p>Terima kasih atas kunjungan Anda!</p>
</body>
</html>
