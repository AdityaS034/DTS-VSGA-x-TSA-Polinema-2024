<?php
include_once 'db.php';

class Participant {
    private $conn;
    private $table_name = "participants";

    public $id;
    public $nama;
    public $email;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET nama=:nama, email=:email";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nama', $this->nama);
        $stmt->bindParam(':email', $this->email);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
