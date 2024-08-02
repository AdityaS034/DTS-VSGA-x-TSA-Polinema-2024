<?php
$host = 'localhost';
$db = 'handsout15';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Koneksi berhasil!<br>";

    $id = 2;
    $new_price = 20000.00;


    $sql = "UPDATE products SET price = :price WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':price', $new_price);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()) {
        echo "Harga produk berhasil diperbarui!";
    } else {
        echo "Gagal memperbarui harga produk!";
    }
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
