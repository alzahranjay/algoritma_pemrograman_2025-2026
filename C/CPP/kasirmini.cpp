#include <iostream>
#include <string>
using namespace std;

int main() {
    string nama;
    double harga;
    int jumlah;

    cout << "Masukkan nama barang: ";
    getline(cin, nama);

    cout << "Masukkan harga barang: ";
    cin >> harga;

    cout << "Masukkan jumlah beli: ";
    cin >> jumlah;

    double total = harga * jumlah;
    double diskon;

    if (total > 91000) {
        diskon = total * 0.01;
    } else {
        diskon = 0;
    }

    double total_bayar = total - diskon;

    cout << "\n===== STRUK DATA =====\n";
    cout << "nama barang    : " << nama << endl;
    cout << "harga satuan   : " << harga << endl;
    cout << "jumlah satuan  : " << jumlah << endl;
    cout << "total harga    : " << total << endl;
    cout << "diskon         : " << diskon << endl;
    cout << "total bayar    : " << total_bayar << endl;
    cout << "=========================\n";

    return 0;
}
