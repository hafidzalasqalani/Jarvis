<?php
// tipe data integer
$umur = 20;
var_dump($umur);

// floar
$phi = 3.14;
var_dump($phi);

// String
$nama = "Aldi";
var_dump($nama);

echo "<br>";

echo "Hello $nama Umur saya $umur. Nilai 'phi' adalah $phi";

//boplean
$isStudent = true;

echo "<br>";

var_dump($isStudent);

echo "<br>";

//array
$siswa = ["Aldi", 17, true];

echo "Halo nama saya $siswa[0], umur saya adalah $siswa[1] tahun";

echo "<br>";

$mahasiswa = ["nama" => "Aldi", "umur" =>17, "ipk" => 4];
echo "Hai saya $mahasiswa[nama], saya seorang mahasiswa dengan ip $mahasiswa[ipk]";