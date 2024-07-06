<?php
// operator array
// diphp ada operator khusus untuk array

// menggabungkan array atau disebut union
$array1 = [
    'first' => 'muhammad'
];
$array2 = [
    'last' => 'imron'
];

echo "\narray digabung : "; 
$add_array = $array1 + $array2;
var_dump($add_array);

// perbandingan key-value jika keduanya sama atau disebut equality
$cek_array = $array1 == $array2; // hasil akan true jika memiliki key value sama
echo "\ncek array : ";
var_dump($cek_array);

// perbandingan key-value jika keduanya sama dan posisi sama disebut identity
$identitas_array = $array1 === $array2; // hasilnya akan true jika memliki key-value sama dan posisi sama
echo "\ncek identitas : ";
var_dump($identitas_array);

// perbandingan array tidak sama disebut Inequality
// hasil akan true jika key-value tidak sama
// contoh 1.
$l_not = $array1 != $array2;
echo "\nnot array != : ";
var_dump($l_not);
// contoh 2.
$not = $array1 <> $array2;
echo "not array <> : ";
var_dump($not);

// perbandingan array tidak identik atau disebut Nonidentify
// hasil akan true jika kedua array tidak identik

$not_identik = $array1 !== $array2;
echo "\nnot identik : ";
var_dump($not_identik);