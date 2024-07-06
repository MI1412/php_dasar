<?php
// variable scope / lingkup variabel
// diphp kita bisa membuat variabel dimanapun yang kita mau
// scope variabel adalah dibagian mana saja sebuah variabel bisa diakses
// php memiliki tiga jenis lingkup variabel atau variable scope yaitu global, local, static

// global scope / lingkup global
// variabel yang dibuat diluar function memiliki scope global
// variabel di scope global hanya bisa diakses dari luar function
// artinya didalam function, kita tidak bisa mengakses variabel di global scope
// contoh
// $name = 'imron'; // variabel global
// function sayName(){
//     echo $name; // eror
// }
// sayName();

// local scope / lingkup lokal
// variable yang dibuat didalam function memiliki scope lokal
// variabel discope local hanya bisa diakses dari dalam function itu sendiri
// artinya variabel tersebut tidak bisa diakses dari luar function ataupun dari function lain
// contoh
// function createName(){
//     $name = 'imron'; // ini variabel lokal
// }
// createName();
// echo $name; // tidak bisa mengakses variabel dalam function

// global keyword
// namun jika kita ingin mengakses variabel diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global
// dengan menggunakan kata kunci global, maka kita bisa mengakses variabel yang ada di global scope dari dalam function
// contoh
// $name = 'imron'; // variabel global
// function sayName(){
//     global $name; // membuat variabel global agar bisa diakses dari dalam function
//     echo $name;
// }
// sayName();

// $global variabel
// selain menggunakan global keyword, setiap variabel yang dibuat diglobal scope, secara otomatis akan disimpan didalam array $global oleh php
// jadi kita bisa menggunakan $global variabel dengan key / kunci nama variabelnya dari dalam function jika ingin mengakses global variabel
// $global adalah variabel yang bersifat superglobal, artinya bisa diakses dari scope manapun
// contoh $global variabel
// $name = 'imron'; // variabel global
// function sayName(){
//     global $name; // setiap variabel global dibuat sebenarnya variabelnya ditambahkan kedalam array $globals, sama seperti ini : $globals['$name'] = 'imron'
//     echo PHP_EOL.$name.PHP_EOL; // atau bisa seperti ini
//     echo $GLOBALS['name'].PHP_EOL; // ini akan mengakses index variabel name
// }
// sayName();

// static scope
// secara default local variabel itu siklusnya hanya sebatas functionnya dieksekusi
// jika sebuah function selesai dieksekusi, maka siklus local variabelnya akan selesai
// php memiliki scope yang bernama static
// static scope hanya bisa di set ke local variabel
// saat kita membuat sebuah local variabel menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
// artinya jika function tersebut dieksekusi lagi, maka static variabel tersebut akan memiliki value dari sebelumnya
// contoh variabel static
function increment(){
    static $counter = 1; // jika tidak memakai keyword static maka variabel $counter akan sekali pakai karena selesai dieksekusi dan akhirnya membuat $counter/variabel lagi
    echo "counter : $counter".PHP_EOL;
    $counter++;
}
increment();
increment();
increment();
