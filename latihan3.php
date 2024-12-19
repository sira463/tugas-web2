<?php
// Program untuk menentukan kelulusan siswa terhadap Mata Pelajaran PWPB

// Fungsi untuk menentukan nilai dan keterangan
function penilaianPWPB($nilai) {
    if ($nilai >= 86 && $nilai <= 100) {
        $grade = "A";
        $keterangan = "Sangat Baik";
    } elseif ($nilai >= 76 && $nilai <= 85) {
        $grade = "B";
        $keterangan = "Baik";
    } elseif ($nilai >= 66 && $nilai <= 75) {
        $grade = "C";
        $keterangan = "Cukup";
    } elseif ($nilai >= 0 && $nilai <= 65) {
        $grade = "D";
        $keterangan = "Kurang";
    } else {
        return "Nilai Diluar Range";
    }

    return "Nilai: $nilai, Grade: $grade, Keterangan: $keterangan";
}

// Contoh penggunaan
$nilai_siswa = 82; // Ubah nilai ini sesuai dengan yang ingin kamu uji
echo penilaianPWPB($nilai_siswa);
?>
