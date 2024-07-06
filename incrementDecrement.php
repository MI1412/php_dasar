<?php
// increment
$a = 1;
$post_increment = $a; // mengembalikan $a kemudian menaikkan 1 angka 
$pre_increment = $a; // menaikkan $b 1 angka kemudian mengembalikan $b
$post_decrement = $a; // mengembalikan $c kemudian menurunkan 1 angka
$pre_decrement = $a; // menurunkan $d satu angka kemudian mengembalikan $d

echo "\npost increment : "; // mengembalikan value dulu kemudian
var_dump($post_increment++); 
echo "contoh kedua : ";
var_dump($post_increment);// menaikkan 1 angka

echo "\npre increment : "; // menaikkan angka diawal kemudian
var_dump(++$pre_increment);
echo "contoh kedua : ";
var_dump($pre_increment); // mengembalikan angka sebelumnya

echo "\npost decrement : "; // mengembalikan angka dulu kemudian
var_dump($post_decrement--);
echo "contoh kedua : ";
var_dump($post_decrement); // angka diturunkan

echo "\npre decrement : "; // angka diturunkan kemudian
var_dump(--$pre_decrement);
echo "contoh kedua : ";
var_dump($pre_decrement); // mengembalikan angka sebelumnya