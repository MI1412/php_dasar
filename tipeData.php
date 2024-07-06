<?php

// tipe data angka : int, float juga ada dengan E notasi plus (1.2 x 1000) output = 1.2e3 , dan ada E notation minus (7x 0.001) output 7e-3


$angka_int = 10;
$angka_float = 0.10;
$angka_octal = 0123;
$angka_hexadesimal = 0x1A;
$angka_binary = 0b1111111;
$angka_underscore = 1_2456_10;

echo "angka int : ";
var_dump($angka_int);

echo "angka float : ";
var_dump($angka_float);

echo "angka octal : ";
var_dump($angka_octal);

echo "angka hexadesimal : ";
var_dump($angka_hexadesimal);

echo "angka binary $angka_binary: ";
var_dump($angka_binary);

echo "angka underscore $angka_underscore : ";
var_dump($angka_underscore);

// int overflow
// sebenarnya diphp ada kapasitas disistem 32-bit = 2milyar, sistem 64-bit = 9 kuintiliun
// jika angka di php telah mencapai batas maka akan diubah ke floating poin
$max_int = PHP_INT_MAX;
echo "max int $max_int";

// tipe data boolean
$benar = true;
$salah = false;
printf("\nini benar : ");
var_dump($benar);
printf("ini salah : ");
var_dump($salah);

// tipe data string
// bisa petik satu, petik dua, multiline string
// multiline string ada heredoc = membuat string panjang bisa dilakukan secara manual, nowdoc mirip seperti heredoc tetapi nowdoc tidak bisa parsing seperti herdoc / petik dua
// perbedaan nya adalah petik satu tidak bisa memasukkan variabel, petik dua bisa memasukkan nama variabel
$string = 'imron';
echo "\nnama : ";
var_dump($string);

// heredoc == petik dua
echo <<<IMRON
halo ini adalah teks yang panjang
yayayya
bisa pakai quote "juga" bisa ditambah variabel juga $string
IMRON;

// nowdoc == petik satu
echo <<<'imron'
ini adalah contoh string menggunakan nowdoc tidak bisa diberi variabel $nama_variabel
"bisa quote juga"
imron;

