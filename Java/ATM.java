import java.util.Scanner;

public class ATM {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        String nama = "";
        boolean valid = false;

        // ===== Input Nama =====
        while (!valid) {
            System.out.print("Masukkan nama Anda: ");
            nama = in.nextLine();

            if (!nama.isEmpty()) {
                valid = true;
            } else {
                System.out.println("Nama tidak boleh kosong, coba lagi!\n");
            }
        }

        // ===== Input NIM lalu menjadi saldo =====
        System.out.print("Masukkan NIM (angka saja): ");
        String nim = in.nextLine();
        long saldo = Long.parseLong(nim);

        int pilihan;
        long jumlah, transfer;

        do {
            System.out.println("\n===== MENU ATM =====");
            System.out.println("1. Cek Saldo");
            System.out.println("2. Tarik Tunai");
            System.out.println("3. Setor Tunai");
            System.out.println("4. Transfer");
            System.out.println("5. Keluar");
            System.out.print("Pilih: ");
            pilihan = in.nextInt();

            switch (pilihan) {
                case 1:
                    System.out.println("Saldo Anda : Rp " + saldo);
                    break;

                case 2:
                    System.out.print("Jumlah tarik: ");
                    jumlah = in.nextLong();
                    if (jumlah <= saldo) {
                        saldo -= jumlah;
                        System.out.println("Berhasil menarik uang");
                    } else {
                        System.out.println("Saldo tidak cukup");
                    }
                    break;

                case 3:
                    System.out.print("Jumlah setor: ");
                    jumlah = in.nextLong();
                    saldo += jumlah;
                    System.out.println("Berhasil setor tunai");
                    break;

                case 4:
                    System.out.print("Jumlah transfer: ");
                    transfer = in.nextLong();
                    if (transfer <= saldo) {
                        saldo -= transfer;
                        System.out.println("Transfer berhasil");
                    } else {
                        System.out.println("Saldo tidak cukup");
                    }
                    break;

                case 5:
                    System.out.println("Terima kasih...");
                    break;

                default:
                    System.out.println("Pilihan tidak valid");
            }

        } while (pilihan != 5);

        in.close();
    }
}