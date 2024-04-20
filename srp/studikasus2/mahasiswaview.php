<?php

require_once 'mahasiswa.php';

class MahasiswaView
{
    public function showMahasiswa(Mahasiswa $mahasiswa)
    {
        echo "NIM: " . $mahasiswa->getNim() . "<br> Nama: " . $mahasiswa->getNama() . "\n";
    }
}