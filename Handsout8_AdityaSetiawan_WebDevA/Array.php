<?php
$numbers = [23, 24, 24, 30, 34, 35, 40, 40, 46, 47];
$total = array_sum($numbers);
$mean = $total / count($numbers);

sort($numbers);
$count = count($numbers);
$middle = floor($count / 2);

if ($count % 2 == 0) {
    $median = ($numbers[$middle - 1] + $numbers[$middle]) / 2;
} else {
    $median = $numbers[$middle];
}
$odd_numbers = array_filter($numbers, function($num) {
    return $num % 2 != 0;
});

echo "Total penjumlahan: " . $total . "<br>";
echo "Nilai rata-rata (mean): " . $mean . "<br>";
echo "Nilai median: " . $median . "<br>";
echo "Angka ganjil: " . implode(", ", $odd_numbers) . "<br>";
?>
