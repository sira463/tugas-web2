<!DOCTYPE html>
<html lang="ya">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 Latihan 1</title>
    <style>
        /* CSS untuk membuat ukuran kotak lebih besar dan memberikan jarak antar kotak */
        table {
            border-collapse: separate; /* Pastikan border tidak menyatu agar jarak bisa diterapkan */
            border-spacing: 10px; /* Jarak antar kotak (sel) di tabel */
            margin: auto; /* Menempatkan tabel di tengah halaman secara horizontal */
            margin-top: 100px; /* Jarak dari atas halaman */
        }
        td {
            width: 50px; /* Lebar setiap kotak */
            height: 50px; /* Tinggi setiap kotak */
            text-align: center; /* Menempatkan teks di tengah dalam kotak */
            vertical-align: middle; /* Menempatkan teks secara vertikal di tengah */
            font-size: 20px; /* Memperbesar ukuran teks */
            border: 1px solid black; /* Border agar tetap terlihat */
        }
    </style>
</head>
<body>
    <table cellpadding="3" cellspacing="0">
        <?php
        // Initialize the number of rows and columns
        $totalRows = 5; // Seperti gambar yang diminta, ada 5 baris

        // Loop untuk membuat baris
        for ($row = 1; $row <= $totalRows; $row++) {
            echo "<tr>";
            
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
