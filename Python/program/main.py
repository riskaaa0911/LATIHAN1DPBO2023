# Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

from Mahasiswa import Mahasiswa

list_mahasiswa = []

mhs1 = Mahasiswa()
mhs1.setNama("Riska")
mhs1.setNim("2109103")
mhs1.setProdi("Ilkom")
mhs1.setFakultas("FPMIPA")
list_mahasiswa.append(mhs1)

mhs2 = Mahasiswa("Mia", "2108450", "Ilkom", "FPMIPA")
list_mahasiswa.append(mhs2)

mhs3 = Mahasiswa("Windi", "2108102", "Manajemen", "FPEB")
list_mahasiswa.append(mhs3)

i = 0
n = 0
nama = ''
nim = ''
prodi = ''
fakultas = ''
nomor = 0
hapus = ''
ubah = ''

print("*----------------------------*")
print("*            MENU            *")
print("*----------------------------*")
print("* 1. Lihat  Data Mahasiswa   *")
print("* 2. Tambah Data Mahasiswa   *")
print("* 3. Hapus  Data Mahasiswa   *")
print("* 4. Ubah   Data Mahasiswa   *")
print("* 5. Keluar                  *")
print("*----------------------------*")

while nomor != 5:
    nomor = int(input("\nPilih menu: "))

    if nomor == 1:
        print("\n===Daftar Mahasiswa UPI Angkatan 2021===")
        for i in range(len(list_mahasiswa)):
            print(str(i+1) + ".Nama     : " + list_mahasiswa[i].getNama())
            print("  NIM      : " + list_mahasiswa[i].getNim())
            print("  Prodi    : " + list_mahasiswa[i].getProdi())
            print("  Fakultas : " + list_mahasiswa[i].getFakultas())

    elif nomor == 2:
        n = int(input("\nJumlah data yang akan ditambahkan: "))
        for i in range(n):
            print("Masukkan data Mahasiswa ke-" +
                  str(i+1) + " yang akan ditambahkan:")
            nama = input("Nama: ")
            nim = input("NIM: ")
            prodi = input("Prodi: ")
            fakultas = input("Fakultas: ")
            temp = Mahasiswa(nama, nim, prodi, fakultas)
            list_mahasiswa.append(temp)
        print("\nData Berhasil ditambahkan!")

    elif nomor == 3:
        hapus = input("\nMasukkan NIM mahasiswa yang akan dihapus: ")
        for i in range(len(list_mahasiswa)):
            if hapus.lower() == list_mahasiswa[i].getNim().lower():
                list_mahasiswa.pop(i)
                break
        print("\nData Berhasil dihapus!")

    elif nomor == 4:
        ubah = input("\nMasukan NIM mahasiswa yang akan diubah: ")
        for i in range(len(list_mahasiswa)):
            if ubah.lower() == list_mahasiswa[i].getNim().lower():
                print("Masukan Perubahan:")
                nama = input("Nama: ")
                nim = input("Nim: ")
                prodi = input("Prodi: ")
                fakultas = input("Fakultas: ")

                list_mahasiswa[i].setNama(nama)
                list_mahasiswa[i].setNim(nim)
                list_mahasiswa[i].setProdi(prodi)
                list_mahasiswa[i].setFakultas(fakultas)

        print("\nData Berhasil diubah!")

print("\nTerima Kasih:)")
