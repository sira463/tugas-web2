<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid Layout A-B-C</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 10px;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
            font-size: 24px;
            font-weight: bold;
        }

        /* Styling for the specific grid layout */
        .box:nth-child(1) { grid-column: 1; grid-row: 1; }
        .box:nth-child(2) { grid-column: 1; grid-row: 2; }
        .box:nth-child(3) { grid-column: 2; grid-row: 2; }
        .box:nth-child(4) { grid-column: 1; grid-row: 3; }
        .box:nth-child(5) { grid-column: 2; grid-row: 3; }
        .box:nth-child(6) { grid-column: 3; grid-row: 3; }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Array untuk menyimpan huruf-huruf
        $letters = ['A', 'A', 'B', 'A', 'B', 'C'];

        // Looping untuk menampilkan huruf dalam kotak
        for ($i = 0; $i < 6; $i++) {
            echo "<div class='box'>" . $letters[$i] . "</div>";
        }
        ?>
    </div>
</body>
</html>