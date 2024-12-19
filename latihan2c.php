<!DOCTYPE html>
<html lang="ya">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2C</title>
    <style>
        /* Definisi kelas untuk baris ganjil dan genap */
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
            color: #000;
        }
        table {
            border-collapse: separate; /* Menggunakan separate agar border-spacing berfungsi */
            border-spacing: 10px; /* Memberikan jarak antar kotak (sel) */
            margin: auto; /* Menempatkan tabel di tengah halaman */
            margin-top: 50px;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            font-size: 20px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table cellpadding="3" cellspacing="0">
        <?php
        // Inisialisasi jumlah baris
        $totalRows = 5; 

        // Loop untuk membuat baris
        for ($row = 1; $row <= $totalRows; $row++) {
            // Tambahkan kelas berdasarkan kondisi ganjil atau genap
            $class = ($row % 2 == 0) ? 'genap' : 'ganjil';
            echo "<tr class='$class'>";
            
            // Loop untuk membuat kolom secara dinamis sesuai jumlah di baris
            for ($col = 1; $col <= $row; $col++) {
                echo "<td>$col</td>";
            }
            
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
