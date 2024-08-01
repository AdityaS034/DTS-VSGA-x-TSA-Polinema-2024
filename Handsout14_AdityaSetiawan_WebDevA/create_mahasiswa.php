<?php
include_once 'db.php';
include_once 'Mahasiswa.php';

$database = new Database();
$db = $database->getConnection();

$mahasiswa = new Mahasiswa($db);

if ($_POST) {
    $mahasiswa->nim = $_POST['nim'];
    $mahasiswa->nama = $_POST['nama'];
    $mahasiswa->tempat_lahir = $_POST['tempat_lahir'];
    $mahasiswa->tanggal_lahir = $_POST['tanggal_lahir'];
    $mahasiswa->jurusan = $_POST['jurusan'];
    $mahasiswa->program_studi = $_POST['program_studi'];
    $mahasiswa->ipk = $_POST['ipk'];

    if ($mahasiswa->create()) {
        echo "Mahasiswa berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan mahasiswa.";
    }
}
?>

<form method="post">
    NIM: <input type="text" name="nim"><br>
    Nama: <input type="text" name="nama"><br>
    Tempat Lahir: <input type="text" name="tempat_lahir"><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    Program Studi: <input type="text" name="program_studi"><br>
    IPK: <input type="text" name="ipk"><br>
    <input type="submit" value="Simpan">
</form>
