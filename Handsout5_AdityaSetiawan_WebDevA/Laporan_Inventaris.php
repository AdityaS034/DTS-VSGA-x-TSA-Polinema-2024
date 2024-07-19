<?php
$inventory = [
    [
        "nama_produk" => "Ayam Goreng Pak Slamet",
        "jumlah_produk" => 10,
        "harga_per_produk" => 15000,
        "status_ketersediaan" => "Tersedia"
    ],
    [
        "nama_produk" => "Cumi Bakar Mas Rico",
        "jumlah_produk" => 5,
        "harga_per_produk" => 20000,
        "status_ketersediaan" => "Tersedia"
    ],
    [
        "nama_produk" => "Soto Gareng Bu Iyem",
        "jumlah_produk" => 0,
        "harga_per_produk" => 12000,
        "status_ketersediaan" => "Tidak Tersedia"
    ]
];

// Function menghitung total
function hitungTotalNilai($jumlah, $harga) {
    return $jumlah * $harga;
}

// Menampilkan laporan
echo "<h1>Laporan Inventaris</h1>";
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Jumlah</th><th>Harga per Produk</th><th>Total Nilai Inventaris</th><th>Status Ketersediaan</th></tr>";

foreach ($inventory as $item) {
    $total_nilai = hitungTotalNilai($item["jumlah_produk"], $item["harga_per_produk"]);
    echo "<tr>";
    echo "<td>" . $item["nama_produk"] . "</td>";
    echo "<td>" . $item["jumlah_produk"] . "</td>";
    echo "<td>Rp " . number_format($item["harga_per_produk"], 2, ',', '.') . "</td>";
    echo "<td>Rp " . number_format($total_nilai, 2, ',', '.') . "</td>";
    echo "<td>" . $item["status_ketersediaan"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
