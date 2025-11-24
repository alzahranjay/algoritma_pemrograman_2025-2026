<?php
$nama = readline("Masukkan nama barang: ");
$harga = floatval(readline("Masukkan harga barang: "));
$jumlah = intval(readline("Masukkan jumlah beli: "));

$total = $harga * $jumlah;

if ($total > 91000) {
    $diskon = $total * 0.01;
} else {
    $diskon = 0;
}

$total_bayar = $total - $diskon;

echo "\n===== STRUK DATA =====\n";
echo "nama barang    : $nama\n";
echo "harga satuan   : $harga\n";
echo "jumlah satuan  : $jumlah\n";
echo "total harga    : $total\n";
echo "diskon         : $diskon\n";
echo "total bayar    : $total_bayar\n";
echo "=========================\n";
?>
