<?php
include_once 'db.php';
include_once 'partisipants.php';

$database = new Database();
$db = $database->getConnection();

$participant = new Participant($db);

if ($_POST) {
    $participant->nama = $_POST['nama'];
    $participant->email = $_POST['email'];

    if ($participant->create()) {
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
