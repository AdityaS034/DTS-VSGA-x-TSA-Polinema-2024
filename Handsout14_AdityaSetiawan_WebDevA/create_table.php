<?php
include_once 'db.php';

$database = new Database();
$db = $database->getConnection();

$query = "CREATE TABLE IF NOT EXISTS participants (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

try {
    $stmt = $db->prepare($query);
    if ($stmt->execute()) {
        echo "Tabel 'participants' berhasil dibuat.";
    } else {
        echo "Gagal membuat tabel 'participants'.";
    }
} catch (PDOException $exception) {
    echo "Error: " . $exception->getMessage();
}
?>
