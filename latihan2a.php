<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 Latihan 1</title>
    <style>
        /* Menambahkan style untuk tampilan kotak */
        table {
            border-collapse: collapse;
            margin: auto;
            width: 80%;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <!-- Baris header -->
        <tr>
            <th>Kolom 1</th>
            <th>Kolom 2</th>
            <th>Kolom 3</th>
            <th>Kolom 4</th>
            <th>Kolom 5</th>
        </tr>

        <?php
        // Inisialisasi jumlah baris
        $totalRows = 15;
        $totalCols = 5;

        // Loop untuk membuat baris
        for ($row = 1; $row <= $totalRows; $row++) {
            echo "<tr>";
            
            // Loop untuk membuat kolom dalam setiap baris
            for ($col = 1; $col <= $totalCols; $col++) {
                echo "<td>Baris $row Kolom $col</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
