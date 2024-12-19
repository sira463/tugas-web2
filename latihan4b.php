<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4b</title>
</head>
<body>
    <?php
    // Array awal berisi nama negara ASEAN
    $negara_asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

    // Menampilkan daftar negara ASEAN awal
    echo "<h3>Daftar Negara ASEAN awal:</h3>";
    echo "<ul>";
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";

    // Menambahkan 3 negara baru ke array
    $negara_asean[] = "Laos";
    $negara_asean[] = "Filipina";
    $negara_asean[] = "Myanmar";

    // Menampilkan daftar negara ASEAN baru
    echo "<h3>Daftar Negara ASEAN baru:</h3>";
    echo "<ul>";
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
