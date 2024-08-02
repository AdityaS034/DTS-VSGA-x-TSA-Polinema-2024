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

    $sql = "SELECT name, price FROM products";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>";

    while ($row = $stmt->fetch()) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['price']}</td>
              </tr>";
    }

    echo "</table>";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
