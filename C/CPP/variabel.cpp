#include <stdio.h> 
#include <conio.h> 
#include <iostream> 
using namespace std; 
 
main() 
{ 
    short a; 
    int b; 
    long c; 
    float d; 
    double e; 
    char data_karakter = 'A'; 
    char materi1[9] = "Variabel"; 
 
    a = 10000; 
    b = 1000000; 
    c = 1000000000; 
    d = 3.12; 
    e = 3.12345; 
 
    cout << "---BELAJAR VARIABEL---" << endl; 
    cout << "Variabel a : " << a << endl; 
    cout << "Variabel b : " << b << endl; 
    cout << "Variabel c : " << c << endl; 
    cout << "Variabel d : " << d << endl; 
    cout << "Variabel e : " << e << endl; 
    cout << "Variabel data_karakter : " << data_karakter << endl; 
    cout << "Variabel materi1 : " << materi1 << endl; 
    cout << endl; 
} 
 
save : konstanta.cpp 
#include <stdio.h> 
#include <conio.h> 
#include <iostream> 
using namespace std; 
 
main() 
{ 
    const double PI = 3.14; 
    const int NILAI_MAX = 100; 
    const char MyChar = 'A'; 
    const string MyName = "ALZAHRA CAHYA SDP"; 
 
    cout << "---BELAJAR KONSTANTA---" << endl; 
    cout << "Konstanta PI : " << PI << endl; 
    cout << "Konstanta NILAI_MAX : " << NILAI_MAX << endl; 
    cout << "Konstanta MyChar : " << MyChar << endl; 
    cout << "Konstanta MyName : " << MyName << endl; 
 
    cout << endl; 
} 
