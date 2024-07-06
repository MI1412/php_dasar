<?php
// array function
// referensi https://www.php.net/manual/en/ref.array.php/

// contoh array function yang sering digunakan
// array_keys(); mengambil semua keys milik array
// array_values(); mengambil semua values milik array
// array_map(); mengubah semua data array dengan callback function
// sort(); mengurutkan array
// rsort(); mengurutkan array sebaliknya
// shuffle(); mengubah posisi data di array secara random

// contoh masing masing array
$array = [1,2,3,4,5,6,7,8,9,10];
// $mapFunction = fn(int $value) => $value * 10;
// $hasil = array_map($mapFunction, $array); // mengubah data array yang dulu dengan function yang diinginkan
// var_dump($hasil);

// rsort($array); lol
// var_dump($array);
// sort($array);
// var_dump($array);
$person = [
    'firstName'=>'muhammad',
    'lastName'=>'imron'
];
$key_array = array_keys($person); // mengambil semua kunci array, jika array bentuk biasa maka akan menampilkan index
var_dump($key_array);
$Values_array = array_values($person); // mengambil nilai / value pada array
var_dump($Values_array);

