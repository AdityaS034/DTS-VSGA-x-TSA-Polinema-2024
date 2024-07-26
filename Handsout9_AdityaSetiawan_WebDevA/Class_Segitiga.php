<?php
class Segitiga {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function hitungKeliling() {
        $sisi_miring = sqrt(pow($this->alas / 2, 2) + pow($this->tinggi, 2));
        return $this->alas + 2 * $sisi_miring;
    }
}

$segitiga = new Segitiga(10, 15);
echo "Luas Segitiga: " . $segitiga->hitungLuas() . "\n";
echo "Keliling Segitiga: " . $segitiga->hitungKeliling() . "\n";
?>
