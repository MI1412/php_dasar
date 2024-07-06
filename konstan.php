<?php
// konstan
// variabel di php bersifat mutable artinya dapat berubah ubah
// sebagai gantinya kalau ingin membuat variabel tidak bisa diubah ada fitur namanya constant
// constant adalah tempat menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
// untuk membuat constant bisa menggunakan method define()
// best practice membuat nama constant adalah menggunakan UPPER_CASE, contoh
// define('NAMA CONSTANT',isi constant);
define("AUTHOR","imron");
define("APP_VERSION",100);
// define("APP_VERSION",90); ini tidak bisa karena nama konstant tidak bisa digunakan lagi


echo AUTHOR; 
echo APP_VERSION;

