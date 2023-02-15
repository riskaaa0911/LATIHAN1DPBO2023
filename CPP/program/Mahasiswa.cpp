/*
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

#include <iostream>
#include <string>

using namespace std;

class Mahasiswa
{

private:
    string nama;
    string nim;
    string prodi;
    string fakultas;

public:
    Mahasiswa()
    {
        this->nama = "";
        this->nim = "";
        this->prodi = "";
        this->fakultas = "";
    }

    Mahasiswa(string nama, string nim, string prodi, string fakultas)
    {
        this->nama = nama;
        this->nim = nim;
        this->prodi = prodi;
        this->fakultas = fakultas;
    }

    void setNama(string nama)
    {
        this->nama = nama;
    }

    string getNama()
    {
        return this->nama;
    }

    void setNim(string nim)
    {
        this->nim = nim;
    }

    string getNim()
    {
        return this->nim;
    }

    void setProdi(string prodi)
    {
        this->prodi = prodi;
    }

    string getProdi()
    {
        return this->prodi;
    }

    void setFakultas(string fakultas)
    {
        this->fakultas = fakultas;
    }

    string getFakultas()
    {
        return this->fakultas;
    }

    ~Mahasiswa()
    {
    }
};