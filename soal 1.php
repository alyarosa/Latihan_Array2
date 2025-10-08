<?php
// Array 2 dimensi
$siswa = [
    ["Alya", 85, 90],
    ["Rafi", 78, 88],
    ["Nina", 92, 81]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa siswa ke-2: " . $siswa[1][2] . "<br><br>";

// Cetak semua data menggunakan looping
echo "Daftar Nilai Siswa:<br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . 
         ", Matematika: " . $siswa[$i][1] . 
         ", Bahasa: " . $siswa[$i][2] . "<br>";
}
?>
