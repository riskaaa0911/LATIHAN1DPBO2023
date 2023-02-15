/*
Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

import java.util.Scanner;
import java.util.ArrayList;

public class Main {
    public static void main(String[] args) {
        ArrayList<Mahasiswa> list = new ArrayList<>();

        Mahasiswa mhs1 = new Mahasiswa();

        mhs1.setNama("Riska");
        mhs1.setNim("2109103");
        mhs1.setProdi("Ilkom");
        mhs1.setFakultas("FPMIPA");
        list.add(mhs1);

        Mahasiswa mhs2 = new Mahasiswa("Mia", "2108450", "Ilkom", "FPMIPA");
        list.add(mhs2);

        Mahasiswa mhs3 = new Mahasiswa("Windi", "2108102", "Manajemen", "FPEB");
        list.add(mhs3);
        int i =0;
        int n=0;
        String nama;
        String nim;
        String prodi;
        String fakultas;
        int nomor;
        String hapus;
        String ubah;
        
        System.out.println("*----------------------------*");
        System.out.println("*            MENU            *");
        System.out.println("*----------------------------*");
        System.out.println("* 1. Lihat  Data Mahasiswa   *");
        System.out.println("* 2. Tambah Data Mahasiswa   *");
        System.out.println("* 3. Hapus  Data Mahasiswa   *");
        System.out.println("* 4. Ubah   Data Mahasiswa   *");
        System.out.println("* 5. Keluar                  *");
        System.out.println("*----------------------------*");

        Scanner sc = new Scanner(System.in);

        do{
        System.out.println();
        System.out.print("Pilih menu : ");
        nomor = sc.nextInt();
        System.out.println();

        if(nomor == 1) {
        System.out.println("===Daftar Mahasiswa UPI Angkatan 2021===");
        for(i=0; i<list.size(); i++) {
            System.out.println(Integer.toString(i + 1) + ".Nama     : " + list.get(i).getNama());
            System.out.println("  NIM      : " + list.get(i).getNim());
            System.out.println("  Prodi    : " + list.get(i).getProdi());
            System.out.println("  Fakultas : " + list.get(i).getFakultas());
        }
        }
        else if(nomor == 2) {
            System.out.print("Jumlah data yang akan ditambahkan: ");
            n = sc.nextInt();
            for(i=0; i<n; i++) {
                System.out.println("Masukan data Mahasiswa ke-"+ Integer.toString(i+1) + " yang akan ditambahkan:");
                System.out.print("Nama: ");
                nama = sc.next();
                System.out.print("NIM: ");
                nim = sc.next();
                System.out.print("Prodi: ");
                prodi = sc.next();
                System.out.print("Fakultas: ");
                fakultas = sc.next();
                Mahasiswa temp = new Mahasiswa();
                temp.setNama(nama);
                temp.setNim(nim);
                temp.setProdi(prodi);
                temp.setFakultas(fakultas);
                list.add(temp);
            }
            System.out.println();
            System.out.println("Data Berhasil ditambahkan!");
        }
        else if(nomor == 3) {
            System.out.print("Masukan NIM mahasiswa yang akan dihapus: ");
            hapus = sc.next();
            for(i=0; i<list.size(); i++) {
                if(hapus.equalsIgnoreCase(list.get(i).getNim())) {
                    list.remove(i);
                }
            }
            System.out.println();
            System.out.println("Data Berhasil dihapus!");
        }
        else if(nomor == 4) {
            System.out.print("Masukan NIM mahasiswa yang akan diubah: ");
            ubah = sc.next();
            for(i=0; i<list.size(); i++) {
                if(ubah.equalsIgnoreCase(list.get(i).getNim())) {
                    System.out.println("Masukan Perubahan: ");
                    System.out.print("Nama: ");
                    nama = sc.next();
                    System.out.print("Nim: ");
                    nim = sc.next();
                    System.out.print("Prodi: ");
                    prodi = sc.next();
                    System.out.print("Fakultas: ");
                    fakultas = sc.next();

                    list.get(i).setNama(nama);
                    list.get(i).setNim(nim);
                    list.get(i).setProdi(prodi);
                    list.get(i).setFakultas(fakultas);
                }
            }
            System.out.println();
            System.out.println("Data Berhasil diubah!");
        } 
        
        }while(nomor != 5);

        System.out.println("Terima Kasih:)");
    }
}