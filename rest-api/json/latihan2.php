<?php
// mengambil json dirubah ke array

$data = file_get_contents('main.json');
$siswa = json_decode($data, true); // jika ditambah true akan menjadi array jika tidak akan menjadi objek
var_dump($siswa);

echo $siswa[0]['nama'];