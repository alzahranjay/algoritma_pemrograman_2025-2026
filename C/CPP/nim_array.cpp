#include <bits/stdc++.h>
using namespace std;

int main() {
    string nim;
    cout << "Masukkan NIM: ";
    if (!(cin >> nim)) return 0;

    vector<int> digits;
    for (char c : nim) {
        if (c >= '0' && c <= '9') digits.push_back(c - '0');
    }

    if (digits.empty()) {
        cout << "Tidak ada digit.\n";
        return 0;
    }

    int total = digits.size();
    int mx = digits[0];
    int mn = digits[0];
    long long sum = 0;
    for (int d : digits) {
        sum += d;
        mx = max(mx, d);
        mn = min(mn, d);
    }
    double avg = (double)sum / total;

    cout << "Array digit = [";
    for (size_t i=0;i<digits.size();++i){
        if (i) cout << ", ";
        cout << digits[i];
    }
    cout << "]\n";

    cout << "Total digit: " << total << '\n';
    cout << "Maksimum digit: " << mx << '\n';
    cout << "Minimum digit: " << mn << '\n';
    cout << "Rata-rata digit: " << fixed << setprecision(2) << avg << '\n';

    cout << "Reverse array NIM = [";
    for (int i = (int)digits.size()-1; i >= 0; --i) {
        if (i != (int)digits.size()-1) cout << ", ";
        cout << digits[i];
    }
    cout << "]\n";

    return 0;
}