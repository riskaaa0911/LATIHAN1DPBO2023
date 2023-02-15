<!-- Saya Riska Nurohmah [2109103] mengerjakan Latihan Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. -->

<?php
    include "Mahasiswa.php";

    echo "<hr>";
    echo "<h3>Daftar Mahasiswa Universitas Pendidikan Indonesia Angkatan 2021</h3>";
    echo "<hr>";

    $mahasiswa1 = new Mahasiswa("Riska Nurohmah", "2109103", "Female", "Ilmu Komputer", "FPMIPA");
    echo "<table>";
    echo "<tr><td>1.<td>"."<td>Nama</td><td>:</td><td>".$mahasiswa1-> getNama()."</td></tr>";
    echo "<tr><td><td>"."<td>NIM</td><td>:</td><td>".$mahasiswa1-> getNIM()."</td></tr>";
    echo "<tr><td><td>"."<td>Gender</td><td>:</td><td>".$mahasiswa1-> getGender()."</td></tr>";
    echo "<tr><td><td>"."<td>Prodi</td><td>:</td><td>".$mahasiswa1-> getProgramStudi()."</td></tr>";
    echo "<tr><td><td>"."<td>Fakultas</td><td>:</td><td>".$mahasiswa1-> getFakultas()."</td></tr>";
    echo "</table>";
    echo "<hr>";

    $mahasiswa2 = new Mahasiswa("Mia Karisma Haq", "2108450", "Female", "Ilmu Komputer", "FPMIPA");
    echo "<table>";
    echo "<tr><td>2.<td>"."<td>Nama</td><td>:</td><td>".$mahasiswa2-> getNama()."</td></tr>";
    echo "<tr><td><td>"."<td>NIM</td><td>:</td><td>".$mahasiswa2-> getNIM()."</td></tr>";
    echo "<tr><td><td>"."<td>Gender</td><td>:</td><td>".$mahasiswa2-> getGender()."</td></tr>";
    echo "<tr><td><td>"."<td>Prodi</td><td>:</td><td>".$mahasiswa2-> getProgramStudi()."</td></tr>";
    echo "<tr><td><td>"."<td>Fakultas</td><td>:</td><td>".$mahasiswa2-> getFakultas()."</td></tr>";
    echo "</table>";
    echo "<hr>";

    $mahasiswa2 = new Mahasiswa("Muhammad Reza Altasya", "2109102", "Male", "Pendidikan Matematika", "FPMIPA");
    echo "<table>";
    echo "<tr><td>3.<td>"."<td>Nama</td><td>:</td><td>".$mahasiswa2-> getNama()."</td></tr>";
    echo "<tr><td><td>"."<td>NIM</td><td>:</td><td>".$mahasiswa2-> getNIM()."</td></tr>";
    echo "<tr><td><td>"."<td>Gender</td><td>:</td><td>".$mahasiswa2-> getGender()."</td></tr>";
    echo "<tr><td><td>"."<td>Prodi</td><td>:</td><td>".$mahasiswa2-> getProgramStudi()."</td></tr>";
    echo "<tr><td><td>"."<td>Fakultas</td><td>:</td><td>".$mahasiswa2-> getFakultas()."</td></tr>";
    echo "</table>";
    echo "<hr>";

    $mahasiswa2 = new Mahasiswa("Arfan Juliandri", "2109105", "Male", "Ilmu Komunikasi", "FPIPS");
    echo "<table>";
    echo "<tr><td>4.<td>"."<td>Nama</td><td>:</td><td>".$mahasiswa2-> getNama()."</td></tr>";
    echo "<tr><td><td>"."<td>NIM</td><td>:</td><td>".$mahasiswa2-> getNIM()."</td></tr>";
    echo "<tr><td><td>"."<td>Gender</td><td>:</td><td>".$mahasiswa2-> getGender()."</td></tr>";
    echo "<tr><td><td>"."<td>Prodi</td><td>:</td><td>".$mahasiswa2-> getProgramStudi()."</td></tr>";
    echo "<tr><td><td>"."<td>Fakultas</td><td>:</td><td>".$mahasiswa2-> getFakultas()."</td></tr>";
    echo "</table>";
    echo "<hr>";

    $mahasiswa2 = new Mahasiswa("Windi Amilah", "2108102", "Female", "Manajemen", "FPEB");
    echo "<table>";
    echo "<tr><td>5.<td>"."<td>Nama</td><td>:</td><td>".$mahasiswa2-> getNama()."</td></tr>";
    echo "<tr><td><td>"."<td>NIM</td><td>:</td><td>".$mahasiswa2-> getNIM()."</td></tr>";
    echo "<tr><td><td>"."<td>Gender</td><td>:</td><td>".$mahasiswa2-> getGender()."</td></tr>";
    echo "<tr><td><td>"."<td>Prodi</td><td>:</td><td>".$mahasiswa2-> getProgramStudi()."</td></tr>";
    echo "<tr><td><td>"."<td>Fakultas</td><td>:</td><td>".$mahasiswa2-> getFakultas()."</td></tr>";
    echo "</table>";
    echo "<hr>";
?>