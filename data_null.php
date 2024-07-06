<?php
// nilai null == tidak ada nilai
// saat kita membuat variabel lalu ingin mengahapus data di variabel, bisa menggunakan NULL bisa mengosongkan variabel tersebut
// untuk membuat data null kita bisa menggunakan NULL
$name = 'imron';
$name = null;
$age = null;
echo "isi : $name";   
echo "\nisi : $age";

// untuk mengecek apakah data ada isinya atau tidak menggunakan is_null($nama_variabel)
echo "\napakah ada isinya dari name : ";
var_dump(is_null($name));

// menghapus variabel
// selain mengubah nilai variabel ke bentuk null kita juga bisa menghapus sebuah variabel dengan funct unset($variabel)
// hati hati jika ingin mengecek data nya null soalnya jika sudah dihapus maka kode variabelnya hilang
// untuk mengecek apakah ada variabelnya atau tidak, bisa menggunakan isset($variabel) dan nilai mengecek juga apakah datanya null

$tes = 'testing'; 
var_dump(isset($tes));
unset($tes);
echo "\nvariabel tes apakah ada isinya atau tidak : ";
var_dump(isset($tes));