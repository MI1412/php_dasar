<?php
// variabel parsing 
// khusus string menggunakan petik dua untuk mengakses variabel, tidak bisa digunakan untuk petik satu
// ini memudahkan ketika kita ingin menggabungkan string dengan variabel
// contoh :
$name = 'imron';
echo "nama : $name";

// curly brace
// kadang kita butuh menggabungkan variabel dengan string tanpa ada spasi. Hal ini akan tidak memudahkan jika hanya menggunakan variabel string
// untungnya diphp kita bisa menambahkan kurung kurawal sebelum menggunakan variabel parsing
echo "\nhalo {$name}n";