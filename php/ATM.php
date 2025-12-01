<?php

do {
    $nama = readline("Masukkan nama Anda: ");

    if (!empty($nama)) {
        $valid = true;
    } else {
        echo "Nama tidak boleh kosong, coba lagi!\n\n";
        $valid = false;
    }
} while (!$valid);

$nim = readline("Masukkan NIM (angka saja): ");
$saldo = intval($nim);

do {
    echo "\n===== MENU ATM =====\n";
    echo "1. Cek Saldo\n";
    echo "2. Tarik Tunai\n";
    echo "3. Setor Tunai\n";
    echo "4. Transfer\n";
    echo "5. Keluar\n";
    echo "Pilih: ";
    $pilihan = intval(readline());

    switch ($pilihan) {
        case 1:
            echo "Saldo Anda : Rp $saldo\n";
            break;

        case 2:
            $jumlah = intval(readline("Jumlah tarik: "));
            if ($jumlah <= $saldo) {
                $saldo -= $jumlah;
                echo "Berhasil menarik uang\n";
            } else {
                echo "Saldo tidak cukup\n";
            }
            break;

        case 3:
            $jumlah = intval(readline("Jumlah setor: "));
            $saldo += $jumlah;
            echo "Berhasil setor tunai\n";
            break;

        case 4:
            $transfer = intval(readline("Jumlah transfer: "));
            if ($transfer <= $saldo) {
                $saldo -= $transfer;
                echo "Transfer berhasil\n";
            } else {
                echo "Saldo tidak cukup\n";
            }
            break;

        case 5:
            echo "Terima kasih...\n";
            break;

        default:
            echo "Pilihan tidak valid\n";
    }

} while ($pilihan != 5);

?>