<?php
// Fungsi untuk mengecek apakah sebuah angka prima
function isPrima($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Loop dari angka 1 hingga 19
for ($number = 1; $number <= 20; $number++) {
    if ($number % 2 == 0) {
        // Jika bilangan genap
        echo "Angka $number adalah bilangan genap";
    } else {
        // Jika bilangan ganjil
        echo "Angka $number adalah bilangan ganjil";
    }

    // Cek apakah bilangan juga bilangan prima
    if (isPrima($number)) {
        echo " dan bilangan prima";
    }

    // Pindah ke baris berikutnya setelah hasil ditampilkan
    echo "<br>";
}
?>
