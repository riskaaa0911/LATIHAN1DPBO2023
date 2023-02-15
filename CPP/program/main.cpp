/*
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

#include <bits/stdc++.h>
#include "Mahasiswa.cpp"

using namespace std;

int main()
{
    list<Mahasiswa> data;

    Mahasiswa mhs1;

    mhs1.setNama("Riska");
    mhs1.setNim("2109103");
    mhs1.setProdi("Ilkom");
    mhs1.setFakultas("FPMIPA");
    data.push_back(mhs1);

    Mahasiswa mhs2("Mia", "2108450", "Ilkom", "FPMIPA");
    data.push_back(mhs2);
    Mahasiswa mhs3("Windi", "2108102", "Manajemen", "FPEB");
    data.push_back(mhs3);

    int i = 0;
    int n = 0;
    string nama;
    string nim;
    string prodi;
    string fakultas;
    int nomor;
    string hapus;
    string ubah;
    cout << "*----------------------------*" << '\n';
    cout << "*            MENU            *" << '\n';
    cout << "*----------------------------*" << '\n';
    cout << "* 1. Lihat  Data Mahasiswa   *" << '\n';
    cout << "* 2. Tambah Data Mahasiswa   *" << '\n';
    cout << "* 3. Hapus  Data Mahasiswa   *" << '\n';
    cout << "* 4. Ubah   Data Mahasiswa   *" << '\n';
    cout << "* 5. Keluar                  *" << '\n';
    cout << "*----------------------------*" << '\n';

    do
    {
        cout << '\n'
             << "Pilih menu : ";
        cin >> nomor;
        cout << '\n';
        if (nomor == 1)
        {
            i = 0;
            cout << "====Daftar Mahasiswa UPI Angkatan 2021===" << '\n';
            for (list<Mahasiswa>::iterator it = data.begin(); it != data.end(); it++)
            {
                cout << (i + 1) << ".";
                cout << "Nama     : " << it->getNama() << endl;
                cout << "  NIM      : " << it->getNim() << endl;
                cout << "  Prodi    : " << it->getProdi() << endl;
                cout << "  Fakultas : " << it->getFakultas() << endl;
                i++;
            }
        }
        else if (nomor == 2)
        {
            cout << "Jumlah data yang akan ditambahkan: ";
            cin >> n;
            for (i = 0; i < n; i++)
            {
                cout << "Masukan data Mahasiswa ke-" << (i + 1) << " yang akan ditambahkan:" << '\n';
                cout << "Nama: ";
                cin >> nama;
                cout << "NIM: ";
                cin >> nim;
                cout << "Prodi: ";
                cin >> prodi;
                cout << "Fakultas: ";
                cin >> fakultas;

                Mahasiswa temp;
                temp.setNama(nama);
                temp.setNim(nim);
                temp.setProdi(prodi);
                temp.setFakultas(fakultas);
                data.push_back(temp);
            }
            cout << '\n'
                 << "Data Berhasil ditambahkan!" << '\n';
        }
        else if (nomor == 3)
        {
            cout << "Masukan NIM mahasiswa yang akan dihapus: ";
            cin >> hapus;
            for (list<Mahasiswa>::iterator it = data.begin(); it != data.end(); it++)
            {
                if (hapus.compare(it->getNim()) == 0)
                {
                    data.erase(it);
                    break;
                }
            }
            cout << '\n'
                 << "Data Berhasil dihapus!" << '\n';
        }
        else if (nomor == 4)
        {
            cout << "Masukan NIM mahasiswa yang akan diubah datanya: ";
            cin >> ubah;
            for (list<Mahasiswa>::iterator it = data.begin(); it != data.end(); it++)
            {
                if (ubah.compare(it->getNim()) == 0)
                {
                    cout << "Masukan Perubahan: " << '\n';
                    cout << "Nama: ";
                    cin >> nama;
                    cout << "NIM: ";
                    cin >> nim;
                    cout << "Prodi: ";
                    cin >> prodi;
                    cout << "Fakultas: ";
                    cin >> fakultas;

                    it->setNama(nama);
                    it->setNim(nim);
                    it->setProdi(prodi);
                    it->setFakultas(fakultas);
                }
            }
            cout << '\n'
                 << "Data Berhasil diubah!" << '\n';
        }
    } while (nomor != 5);

    cout << "Terima Kasih:)" << endl;
    return 0;
}