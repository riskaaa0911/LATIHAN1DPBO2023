# Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.


class Mahasiswa:

    __nama = ""
    __nim = ""
    __prodi = ""
    __fakultas = ""

    def __init__(self, nama="", nim="", prodi="", fakultas=""):
        self.__nama = nama
        self.__nim = nim
        self.__prodi = prodi
        self.__fakultas = fakultas

    def setNama(self, nama):
        self.__nama = nama

    def getNama(self):
        return self.__nama

    def setNim(self, nim):
        self.__nim = nim

    def getNim(self):
        return self.__nim

    def setProdi(self, prodi):
        self.__prodi = prodi

    def getProdi(self):
        return self.__prodi

    def setFakultas(self, fakultas):
        self.__fakultas = fakultas

    def getFakultas(self):
        return self.__fakultas
