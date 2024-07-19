<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Persegi Panjang</title>
</head>
<body>

<h2>Hitung Luas, Keliling, dan Panjang Diagonal Persegi Panjang</h2>

<form method="post">
    Panjang: <input type="number" name="panjang" step="0.01" required><br>
    Lebar: <input type="number" name="lebar" step="0.01" required><br>
    <input type="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    // Menghitung luas
    $luas = $panjang * $lebar;

    // Menghitung keliling
    $keliling = 2 * ($panjang + $lebar);

    // Menghitung panjang diagonal
    $diagonal = sqrt(pow($panjang, 2) + pow($lebar, 2));

    // Menampilkan hasil
    echo "<h3>Hasil Perhitungan</h3>";
    echo "Panjang: " . $panjang . " cm<br>";
    echo "Lebar: " . $lebar . " cm<br>";
    echo "Luas: " . $luas . " cm<sup>2<br>";
    echo "Keliling: " . $keliling . " cm<br>";
    echo "Panjang Diagonal: " . number_format($diagonal, 2) . " cm<br>";
}
?>

</body>
</html>
