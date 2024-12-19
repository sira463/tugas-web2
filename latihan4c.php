<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4c</title>
</head>
<body>
    <?php
    // Array asosiatif berisi negara-negara ASEAN dan ibukotanya
    $negara_asean = [
        "Indonesia" => "D.KI. Jakarta",
        "Singapura" => "Singapura",
        "Malaysia" => "Kuala Lumpur",
        "Brunei" => "Bandar Seri Begawan",
        "Thailand" => "Bangkok",
        "Laos" => "Vientiane",
        "Filipina" => "Manila",
        "Myanmar" => "Naypyidaw"
    ];

    // Menampilkan daftar negara ASEAN dan ibukotanya
    echo "<h3>Daftar Negara ASEAN dan Ibukota:</h3>";
    echo "<ul>";
    foreach ($negara_asean as $negara => $ibukota) {
        echo "<li>$negara: $ibukota</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
