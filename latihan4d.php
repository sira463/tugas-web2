<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4d</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Array multidimensi berisi negara-negara ASEAN, ibukota, dan kode telepon
    $negara_asean = [
        ["negara" => "Indonesia", "ibukota" => "D.K.I. Jakarta", "kode_telepon" => "+62"],
        ["negara" => "Singapura", "ibukota" => "Singapura", "kode_telepon" => "+65"],
        ["negara" => "Malaysia", "ibukota" => "Kuala Lumpur", "kode_telepon" => "+60"],
        ["negara" => "Brunei", "ibukota" => "Bandar Seri Begawan", "kode_telepon" => "+673"],
        ["negara" => "Thailand", "ibukota" => "Bangkok", "kode_telepon" => "+66"],
        ["negara" => "Laos", "ibukota" => "Vientiane", "kode_telepon" => "+856"],
        ["negara" => "Filipina", "ibukota" => "Manila", "kode_telepon" => "+63"],
        ["negara" => "Myanmar", "ibukota" => "Naypyidaw", "kode_telepon" => "+95"]
    ];

    // Menampilkan daftar negara ASEAN dalam tabel
    echo "<h3>Daftar Negara ASEAN</h3>";
    echo "<table>";
    echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";
    foreach ($negara_asean as $data) {
        echo "<tr>";
        echo "<td>{$data['negara']}</td>";
        echo "<td>{$data['ibukota']}</td>";
        echo "<td>{$data['kode_telepon']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
