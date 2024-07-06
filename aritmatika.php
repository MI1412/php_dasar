<?php
// operator aritmatika
// contoh : 
$angka1 = 10; 
$angka2 = 20;
$positif = +$angka1;
$negatif = -$angka1;
$penjumlahan = $angka1 + $angka2;
$pengurangan = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;
$sisa_bagi = $angka1 % $angka2;
$pangkat2 = $angka1 ** $angka2;

echo "ini bilangan positif : $positif\n";

echo "ini bilangan negatif : $negatif\n";

echo "ini penjumlahan dari $angka1 + $angka2 : ";
var_dump($penjumlahan);

echo "ini pengurangan dari $angka1 - $angka2 : ";
var_dump($pengurangan);

echo "ini perkalian dari $angka1 * $angka2 : ";
var_dump($perkalian);

echo "ini pembagian dari $angka1 / $angka2 : ";
var_dump($pembagian);

echo "ini adalah sisa bagi dari $angka1 % $angka2 : ";
var_dump($sisa_bagi);

echo "ini adalah bilangan pangkat dari pangkat $angka1 ** $angka2 : ";
var_dump($pangkat2);