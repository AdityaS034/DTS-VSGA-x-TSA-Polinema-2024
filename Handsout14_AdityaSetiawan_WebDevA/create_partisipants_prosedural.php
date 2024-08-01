<?php
include_once 'db.php';

$database = new Database();
$db = $database->getConnection();

if ($_POST) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO participants (nama, email) VALUES (:nama, :email)";
    $stmt = $db->prepare($query);

    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "Partisipan berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan partisipan.";
    }
}
?>

<form method="post">
    Nama: <input type="text" name="nama"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Simpan">
</form>
