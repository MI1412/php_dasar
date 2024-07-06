<?php
// operator penugasan
$a = 3;
$b = 2;
$o_penjumlahan = $a += $b;
$o_pengurangan = $a -= $b;
$o_perkalian = $a *= $b;
$o_pembagian = $a /= $b;
$o_modulus = $a %= $b;

echo "operator assignment $a += $b : ";
var_dump($o_penjumlahan);

echo "operator assignment $a -= $b : ";
var_dump($o_pengurangan);

echo "operator assignment $a *= $b : ";
var_dump($o_perkalian);

echo "operator assignment $a /= $b : ";
var_dump($o_pembagian);

echo "operator assignment $a %= $b : ";
var_dump($o_modulus);

$o_pangkat = $a **= $b;
echo "operator assignment $a **= $b : ";
var_dump($o_pangkat);

// problem kenapa output berbeda dengan isi variabel