<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "handsout10-12";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$sql_create_table = "CREATE TABLE IF NOT EXISTS produk (
    id_produk INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(255) NOT NULL,
    kategori VARCHAR(255) NOT NULL,
    harga DECIMAL(10,2) NOT NULL,
    stok INT(11) NOT NULL
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Tabel produk siap atau sudah ada. <br>";
} else {
    echo "Error membuat tabel: " . $conn->error . "<br>";
}


$nama_produk = $_POST['nama_produk'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];


$sql_insert = "INSERT INTO produk (nama_produk, kategori, harga, stok) VALUES ('$nama_produk', '$kategori', '$harga', '$stok')";

if ($conn->query($sql_insert) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
}


$conn->close();
?>
