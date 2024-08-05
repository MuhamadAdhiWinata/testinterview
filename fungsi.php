<?php
// NOMOR 1
function tampilkanNomorUrut($maxNumber) {
    for ($x = 1; $x <= $maxNumber; $x++) {
        if ($x < $maxNumber) {
            echo "$x-";
        } else {
            echo "$x";
        }
    }
}
// NOMOR 2
function cekBilanganGenapGanjil($bil) {
    if ($bil % 2 == 0) {
        return "$bil Merupakan Bilangan Genap";
    } else {
        return "$bil Merupakan Bilangan Ganjil";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submitUrutan'])) {
        $maxNumber = $_POST['maxNumber']; // Mengambil input untuk urutan angka
        echo "<h2>Hasil Urutan Angka</h2>";
        echo "<p>";
        tampilkanNomorUrut($maxNumber);
        echo "</p>";
    }

    if (isset($_POST['submitCek'])) {
        $bil = $_POST['bil']; // Mengambil input untuk cek bilangan
        echo "<h2>Hasil Cek Bilangan</h2>";
        echo "<p>" . cekBilanganGenapGanjil($bil) . "</p>";
    }
}
?>
