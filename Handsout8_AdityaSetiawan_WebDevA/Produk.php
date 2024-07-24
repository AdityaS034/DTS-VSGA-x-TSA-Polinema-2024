<?php
$products = [
    [
        'name' => 'Pecel Lele Pak Damang',
        'price' => 25000,
        'stock' => 50
    ],
    [
        'name' => 'Bebek Kepideg Bu Nyunyun',
        'price' => 25000,
        'stock' => 30
    ],
    [
        'name' => 'Nasi Kobong Pak Ireng',
        'price' => 15000,
        'stock' => 20
    ],
    [
        'name' => 'Sate Wedus Bu Maro',
        'price' => 15000,
        'stock' => 10
    ]
];

echo "<h2>Daftar Produk</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Nama Produk</th><th>Harga</th><th>Stok</th></tr>";

foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($product['name']) . "</td>";
    echo "<td>" . number_format($product['price'], 0, ',', '.') . "</td>";
    echo "<td>" . htmlspecialchars($product['stock']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
