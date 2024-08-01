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

    if ($mahasiswa->update()) {
        echo "Mahasiswa berhasil diupdate.";
    } else {
        echo "Gagal mengupdate mahasiswa.";
    }
} else {
    if (isset($_GET['nim'])) {
        $mahasiswa->nim = $_GET['nim'];
        $mahasiswa->readOne();
    }
}
?>

<form method="post">
    NIM: <input type="text" name="nim" value="<?php echo $mahasiswa->nim; ?>" readonly><br>
    Nama: <input type="text" name="nama" value="<?php echo $mahasiswa->nama; ?>"><br>
    Tempat Lahir: <input type="text" name="tempat_lahir" value="<?php echo $mahasiswa->tempat_lahir; ?>"><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir" value="<?php echo $mahasiswa->tanggal_lahir; ?>"><br>
    Jurusan: <input type="text" name="jurusan" value="<?php echo $mahasiswa->jurusan; ?>"><br>
    Program Studi: <input type="text" name="program_studi" value="<?php echo $mahasiswa->program_studi; ?>"><br>
    IPK: <input type="text" name="ipk" value="<?php echo $mahasiswa->ipk; ?>"><br>
    <input type="submit" value="Update">
</form>
