<!DOCTYPE html>
<html>
<head>
    <title>Status Kelulusan Mahasiswa</title>
</head>
<body>

<h2>Periksa Status Kelulusan Mahasiswa</h2>

<form method="post">
    NIM: <input type="text" name="nim" required><br>
    Nama: <input type="text" name="nama" required><br>
    Nilai Q1: <input type="number" name="nilai_q1" step="0.01" required><br>
    Nilai Q2: <input type="number" name="nilai_q2" step="0.01" required><br>
    Nilai UTS: <input type="number" name="nilai_uts" step="0.01" required><br>
    Nilai UAS: <input type="number" name="nilai_uas" step="0.01" required><br>
    Nilai Proyek: <input type="number" name="nilai_proyek" step="0.01" required><br>
    <input type="submit" value="Cek Kelulusan">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $nilai_q1 = $_POST['nilai_q1'];
    $nilai_q2 = $_POST['nilai_q2'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_proyek = $_POST['nilai_proyek'];

    // Menghitung nilai akhir
    $nilai_akhir = ($nilai_q1 * 0.10) + ($nilai_q2 * 0.10) + ($nilai_uts * 0.10) + ($nilai_uas * 0.20) + ($nilai_proyek * 0.50);

    // Menentukan status kelulusan
    $status_kelulusan = $nilai_akhir > 60 ? "Lulus" : "Tidak Lulus";

    // Menampilkan hasil
    echo "<h3>Hasil Perhitungan</h3>";
    echo "NIM: " . $nim . "<br>";
    echo "Nama: " . $nama . "<br>";
    echo "Nilai Q1: " . $nilai_q1 . "<br>";
    echo "Nilai Q2: " . $nilai_q2 . "<br>";
    echo "Nilai UTS: " . $nilai_uts . "<br>";
    echo "Nilai UAS: " . $nilai_uas . "<br>";
    echo "Nilai Proyek: " . $nilai_proyek . "<br>";
    echo "Nilai Akhir: " . number_format($nilai_akhir, 2) . "<br>";
    echo "Status Kelulusan: " . $status_kelulusan . "<br>";
}
?>

</body>
</html>
