<?php
// tenary operator
// kadang jika kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika benar kita ingin memberi nilai terhadap variabel dengan nilai x dan jika salah dengan nilai y
// penggunaan if statement pada contoh ini bisa dipersingkat menggunakan ternary operator
// menggunakan kata kunci ? dan:
// contoh if statement :
$gender = "pria"; 
// $hi = null;
// if($gender == "pria"):
//     $hi = "hi bro";
// else:
//     $hi = "hi nona";
// endif;        
// echo $hi , PHP_EOL;
// ini bisa dipersingkat menggunakan ternary operator
// ternary operator
// $namavariabel = $variabelPercabangan == "" ? "ini akan dieksekusi jika true":"ini akan di eksekusi jika false";
$hi = $gender == "pria" ? "hi bro !":"Hi nona";
echo $hi;
