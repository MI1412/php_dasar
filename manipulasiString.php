<?php
// manipulasi string
// dot operator
// dot atau (titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain (bisa string atau tipe data lain)
// sebenarnya kita bisa menggunakan +(plus) untuk menambahkan string, namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi eror.Oleh karena itu direkomendasikan menggunakan .(dot) untuk menambahkan string dengan data lain
// contoh :
// penggabungan string bisa menggunakan .(dot) atau ,(koma)
$name = 'muhammad imron';
echo "Nama : ",$name,PHP_EOL;
echo "nilai : ". 100 ."\n";

// mengakses karakter
// string diphp seperti array karakter dimana saat mengakses index menggunakan [] kurung siku
// jika mengakses index lebih dari karakter akan eror
// contoh :
echo "\nmengambil index ke 1 : ", $name[1-1];
echo "\nmengambil index ke 2 : ", $name[2-1];
// echo "\nmengambil index ke 9 : ", $name[19-1]; ini akan eror karena keluar dari index string