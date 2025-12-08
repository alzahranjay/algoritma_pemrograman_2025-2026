<?php
echo "Masukkan NIM: ";
$nim = trim(fgets(STDIN));

$digits = [];
for ($i = 0; $i < strlen($nim); $i++) {
    $c = $nim[$i];
    if ($c >= '0' && $c <= '9') $digits[] = intval($c);
}

if (count($digits) === 0) {
    echo "Tidak ada digit.\n";
    exit;
}

$total = count($digits);
$sum = array_sum($digits);
$mx = max($digits);
$mn = min($digits);
$avg = $sum / $total;

echo "Array digit = [" . implode(", ", $digits) . "]\n";
echo "Total digit: $total\n";
echo "Maksimum digit: $mx\n";
echo "Minimum digit: $mn\n";
echo "Rata-rata digit: " . number_format($avg, 2) . "\n";

$rev = array_reverse($digits);
echo "Reverse array NIM = [" . implode(", ", $rev) . "]\n";