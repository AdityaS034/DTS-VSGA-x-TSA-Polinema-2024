<?php
$start = 2;
$end = 24;
$sum = 0;


while ($start <= $end) {
    $sum += $start;
    $start += 2;
}

echo "Hasil penjumlahan bilangan genap: " . $sum;
?>
