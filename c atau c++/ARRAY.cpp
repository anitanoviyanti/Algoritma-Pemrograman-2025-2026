#include <iostream>
using namespace std;

int main() {
    string buah[3] = {"Jindan", "Raddin", "Rafi"};

    cout << "Daftar Siswa :" << endl;
    for (int i = 0; i < 3; i++) {
        cout << buah[i] << endl;
    }
    return 0;
}
