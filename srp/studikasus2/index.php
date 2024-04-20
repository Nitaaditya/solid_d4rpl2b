<?php

require_once 'mahasiswa.php';
require_once 'mahasiswaview.php';

$mahasiswa = new Mahasiswa("2205052", "Nita Aditya Elfani");

$view = new MahasiswaView();

$view->showMahasiswa($mahasiswa);