<!-- Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. -->


<?php

class Mahasiswa {
    private $nama = "";
    private $nim = "";
    private $gender = "";
    private $program_studi = "";
    private $fakultas = "";

    function __construct($nama="", $nim ="", $gender="", $ps="", $fk="") {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->gender = $gender;
        $this->program_studi = $ps;
        $this->fakultas = $fk;
    }

    function setNama($nama="") {
        $this->nama =  $nama;
    }

    function setNim($nim= "") {
        $this->nim = $nim;
    }

    function setGender($gender= "") {
        $this->gender = $gender;
    }

    function setProgramStudi($ps= "") {
        $this->program_studi = $ps;
    }

    function setFakultas($fk= "") {
        $this->fakultas = $fk;
    }

    function getNama() {
        return $this->nama;
    }

    function getNim() {
        return $this->nim;
    }

    function getGender() {
        return $this->gender;
    }

    function getProgramStudi() {
        return $this->program_studi;
    }

    function getFakultas() {
        return $this->fakultas;
    }

    function __destruct() {
        
    }
}
?>