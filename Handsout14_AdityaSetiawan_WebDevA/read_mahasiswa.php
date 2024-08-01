<?php
include_once 'db.php';
include_once 'Mahasiswa.php';

$database = new Database();
$db = $database->getConnection();

$mahasiswa = new Mahasiswa($db);

$stmt = $mahasiswa->read();
$num = $stmt->rowCount();

if ($num > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "NIM: {$nim}<br>";
        echo "Nama: {$nama}<br>";
        echo "Tempat Lahir: {$tempat_lahir}<br>";
        echo "Tanggal Lahir: {$tanggal_lahir}<br>";
        echo "Jurusan: {$jurusan}<br>";
        echo "Program Studi: {$program_studi}<br>";
        echo "IPK: {$ipk}<br><br>";
    }
} else {
    echo "Tidak ada data mahasiswa.";
}
?>
