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


    $name = "Laptop";
    $price = 15000.00;


    $sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
    $stmt = $pdo->prepare($sql);


    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);


    if($stmt->execute()) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan data!";
    }
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
