<?php
// isfunction
// php memiliki banyak sekali function dengan prefix is_
// function-function ini rata-rata digunakan untuk mengecek tipe data dari sebuah data
// referensi https://www.php.net/manual/en/ref.var.php/

// contoh is_function
// is_string(); mengecek tipe data string
// is_bool(); cek tipe data boolean
// is_int(); cek tipe data number int
// is_float(); cek tipe data number float
// is_array(); cek tipe data array
// is_callable(); cek tipe data callable

// contoh

use Symfony\Component\VarDumper\VarDumper;

$string = 'halo dunia';
$int = 10;
$float = .90;
$bool = true;
$array = [9,9,9,9,9,9];
$callable = function (){
    echo "halo dunia";
};

var_dump(is_string($string));
var_dump(is_string($int));

var_dump(is_int($int));
var_dump(is_int($array));

var_dump(is_float($float));
var_dump(is_float($string));

var_dump(is_array($array));

var_dump(is_bool($bool));