<?php
// operator komparasi / perbandingan digunakan untuk membandingkan 2 value variabel
// hasil operator perbandingan adalah boolean
$a = 1;
$b = 2;

$o_samaDengan = $a == $b; // hasil true jika kedua value sama
$o_identik = $a === $b; // hasil true jika memiliki kedua value sama dan tipe data juga sama
$o_tidakSama = $a != $b; // hasil true jika kedua value tidak sama dan tipe data juga
$o_tidakSamaTipe = $a <> $b; // hasil true jika kedua value tidak sama dan tipe data juga
$o_tidakIdentik = $a !== $b; // hasil true jika kedua value tidak sama atau tidak sama tipe data
$o_kurangDari = $a < $b; // hasil true jika kurang dari 
$o_kurangDariSama = $a <= $b; // hasil true jika kurang dari atau sama dengan
$o_lebihDari = $a > $b; // hasil true jika lebih dari
$o_lebihDariSama = $a >= $b; // hasil true jika lebih dari atau sama dengan

echo "perbandingan $a == $b : ";
var_dump($o_samaDengan);

echo "perbandingan $a === $b : ";
var_dump($o_identik);

echo "perbandingan $a != $b : ";
var_dump($o_tidakSama);

echo "perbandingan $a <> $b : ";
var_dump($o_tidakSamaTipe);

echo "perbandingan $a !== $b : ";
var_dump($o_tidakIdentik);

echo "perbandingan $a < $b : ";
var_dump($o_kurangDari);

echo "perbandingan $a <= $b : ";
var_dump($o_kurangDariSama);

echo "perbandingan $a > $b : ";
var_dump($o_lebihDari);
echo "perbandingan $a >= $b : ";
var_dump($o_lebihDariSama);