<?php
// operator logika untuk membandingkan 2 nilai boolean

$o_and = true && true; // hasil benar jika keduanya benar
$and = true and true; // hasil benar jika keduanya benar
$o_or = true || false; // hasil benar jika salah satu benar atau keduanya benar
$or = true or false; // hasil benar jika salah  satu benar atau keduanya benar
$o_not = ! true; // hasilnya terbalik dari nilai booleannya
$o_xor = true xor false; // hasil benar jika salah satu benar tapi tidak keduanya

echo "\nAnd && : ";
var_dump($o_and);

echo "And : ";
var_dump($and);

echo "or || : ";
var_dump($o_or);

echo "or : ";
var_dump($or);

echo "not : ";
var_dump($o_not);

echo "Xor : ";
var_dump($o_xor);