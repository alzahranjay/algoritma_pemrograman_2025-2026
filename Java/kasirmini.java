import java.util.Scanner;

public class kasirmini {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Masukkan nama barang: ");
        String nama = input.nextLine();

        System.out.print("Masukkan harga barang: ");
        double harga = input.nextDouble();

        System.out.print("Masukkan jumlah beli: ");
        int jumlah = input.nextInt();

        double total = harga * jumlah;
        double diskon;

        if (total > 91000) {
            diskon = total * 0.01;
        } else {
            diskon = 0;
        }

        double total_bayar = total - diskon;

        System.out.println("\n===== STRUK DATA =====");
        System.out.println("nama barang    : " + nama);
        System.out.println("harga satuan   : " + harga);
        System.out.println("jumlah satuan  : " + jumlah);
        System.out.println("total harga    : " + total);
        System.out.println("diskon         : " + diskon);
        System.out.println("total bayar    : " + total_bayar);
        System.out.println("=========================");

        input.close();
    }
}

    

