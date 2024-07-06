<?php
// string function
// sebenarnya banyak sekali function bawaan php
// kunjungi disini https://www.php.net/manual/en/ref.string.php

// contoh string function sering digunakan
// join() / implode(); menggabungkan array menjadi string
// explode(); memecah string menjadi array
// strtolower(); mengubah string menjadi lowercase
// strtoupper(); mengubah string menjadi uppercase
// substr(); mengambil sebagian string
// trim(); menghapus spasi didepan dan dibelakang string
// contoh masing masing string function
var_dump(join(',',[90,24,24,56,78]));
var_dump(explode(' ','muhammad imron'));
var_dump(strtolower('MUHAMMAD IMRON'));
var_dump(strtoupper('halo dunia'));
var_dump(trim('        imron           '));
var_dump(substr('HE YA TES',0,3)); // mengambil string di index 0 sampai index 3