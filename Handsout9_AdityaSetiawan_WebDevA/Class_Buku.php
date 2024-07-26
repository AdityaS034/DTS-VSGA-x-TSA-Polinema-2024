<?php
class Buku {
    private $judul;
    private $penulis;
    private $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function tampilkanInformasi() {
        echo "Judul: " . $this->judul . "\n";
        echo "Penulis: " . $this->penulis . "\n";
        echo "Tahun Terbit: " . $this->tahunTerbit . "\n";
    }
}

class Perpustakaan {
    private $koleksiBuku = [];

    public function tambahBuku(Buku $buku) {
        $this->koleksiBuku[] = $buku;
    }

    public function tampilkanSemuaBuku() {
        foreach ($this->koleksiBuku as $buku) {
            $buku->tampilkanInformasi();
            echo "-------------------\n";
        }
    }

    public function cariBukuBerdasarkanJudul($judul) {
        foreach ($this->koleksiBuku as $buku) {
            if ($buku->getJudul() == $judul) {
                return $buku;
            }
        }
        return null;
    }
}

$buku1 = new Buku("Belajar PHP", "John Doe", 2020);
$buku2 = new Buku("Pemrograman Web", "Jane Smith", 2018);
$buku3 = new Buku("Algoritma dan Struktur Data", "Alice Johnson", 2015);

$perpustakaan = new Perpustakaan();
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);
$perpustakaan->tambahBuku($buku3);

echo "Semua buku di perpustakaan:\n";
$perpustakaan->tampilkanSemuaBuku();

echo "Mencari buku berdasarkan judul 'Pemrograman Web':\n";
$bukuDitemukan = $perpustakaan->cariBukuBerdasarkanJudul("Pemrograman Web");
if ($bukuDitemukan) {
    $bukuDitemukan->tampilkanInformasi();
} else {
    echo "Buku tidak ditemukan.\n";
}
?>
