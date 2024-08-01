<?php
include_once 'db.php';
include_once 'Mahasiswa.php';

$database = new Database();
$db = $database->getConnection();

$mahasiswa = new Mahasiswa($db);

if ($_POST) {
    $mahasiswa->nim = $_POST['nim'];

    if ($mahasiswa->delete()) {
        echo "Mahasiswa berhasil dihapus.";
    } else {
        echo "Gagal menghapus mahasiswa.";
    }
}
?>

<form method="post">
    NIM: <input type="text" name="nim"><br>
    <input type="submit" value="Hapus">
</form>
