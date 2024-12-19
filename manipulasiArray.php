<?php

$hari = ["Senin", "Selasa", "Rabu"]; // Mendefinisikan array dengan benar

echo "Array awal: <br>";
print_r($hari);
echo "<hr>";

echo "Array setelah di-pop: <br>";
$hasil = array_pop($hari); // Menghapus atau mengambil elemen terakhir dari array
print_r($hari);
echo "<br>Elemen yang di-pop: $hasil <hr>";

echo "Array setelah di-push: <br>";
array_push($hari, "Kamis", "Jum'at"); // Menambahkan beberapa elemen pada akhir array
print_r($hari);
echo "<hr>";

echo "Array setelah di-shift: <br>";
$hasil = array_shift($hari); // Menghapus atau mengambil elemen pertama dari array
print_r($hari);
echo "<br>Elemen yang di-shift: $hasil <hr>";

echo "Array setelah di-unshift: <br>";
array_unshift($hari, "Elemen", "Ditambahkan"); // Menambahkan beberapa elemen pada awal array
print_r($hari);

?>
