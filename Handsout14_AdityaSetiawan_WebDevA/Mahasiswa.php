<?php
include_once 'db.php';

class Mahasiswa {
    private $conn;
    private $table_name = "mahasiswa";

    public $nim;
    public $nama;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $jurusan;
    public $program_studi;
    public $ipk;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET nim=:nim, nama=:nama, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, jurusan=:jurusan, program_studi=:program_studi, ipk=:ipk";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nim', $this->nim);
        $stmt->bindParam(':nama', $this->nama);
        $stmt->bindParam(':tempat_lahir', $this->tempat_lahir);
        $stmt->bindParam(':tanggal_lahir', $this->tanggal_lahir);
        $stmt->bindParam(':jurusan', $this->jurusan);
        $stmt->bindParam(':program_studi', $this->program_studi);
        $stmt->bindParam(':ipk', $this->ipk);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE nim = ? LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->nim);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nama = $row['nama'];
        $this->tempat_lahir = $row['tempat_lahir'];
        $this->tanggal_lahir = $row['tanggal_lahir'];
        $this->jurusan = $row['jurusan'];
        $this->program_studi = $row['program_studi'];
        $this->ipk = $row['ipk'];
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nama = :nama, tempat_lahir = :tempat_lahir, tanggal_lahir = :tanggal_lahir, jurusan = :jurusan, program_studi = :program_studi, ipk = :ipk WHERE nim = :nim";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nim', $this->nim);
        $stmt->bindParam(':nama', $this->nama);
        $stmt->bindParam(':tempat_lahir', $this->tempat_lahir);
        $stmt->bindParam(':tanggal_lahir', $this->tanggal_lahir);
        $stmt->bindParam(':jurusan', $this->jurusan);
        $stmt->bindParam(':program_studi', $this->program_studi);
        $stmt->bindParam(':ipk', $this->ipk);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE nim = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->nim);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
