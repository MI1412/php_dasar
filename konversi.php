<?php
// konversi tipe data
// kadang kita sering melakukan konversi tipe data dari string ke number(int/float) atau sebaiknya
// untuk melakukan konversi diphp cukup mudah cukup menggunakan tanda kurung (tipe data)
// tipe data untuk string adalah string, untuk number bisa menggunakan int untuk integer dan float untuk floating-point
// contoh :
//  variabel = (konversi tipe data) asal data
$int = (int)"9";
echo "\nkonversi string $int ke int : ",var_dump($int);
$string = (string) 100;
echo "konversi angka $string ke string : ",var_dump($string);
$float = (float)"10.90";
echo "konversi string $float ke float : ",var_dump($float);
$bool = (boolean)"1"; // jika 1 true , jika 0 false
echo "konversi angka $bool ke boolean : ",var_dump($bool);

$bool = (boolean)"0"; // jika 1 true , jika 0 false
echo "konversi angka $bool ke boolean : ",var_dump($bool);




