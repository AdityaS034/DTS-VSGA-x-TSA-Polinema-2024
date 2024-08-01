<?php
include_once 'db.php';

$database = new Database();
$db = $database->getConnection();

$query = "SELECT * FROM participants ORDER BY nama ASC";

$stmt = $db->prepare($query);
$stmt->execute();

$num = $stmt->rowCount();

if ($num > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "ID: {$id}<br>";
        echo "Nama: {$nama}<br>";
        echo "Email: {$email}<br>";
        echo "Tanggal Registrasi: {$tgl_registrasi}<br><br>";
    }
} else {
    echo "Tidak ada data partisipan.";
}
?>
