<?php
// arrow function
// arrow function diperkenalkan di php 7.4 sebagai alternatif anonymous function yang lebih sederhana pembuatannya
// secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama
// hal yang membedakan di arrow function adalah secara otomatis variabel diluar closure bisa digunakan, tidak seperti di anonymous function yang harus disebutkan secara manual menggunakan kata kunci use
// pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn
// arrow function dikhususnya untuk membuat function yang sederhana

// kesimpulan arrow function adalah anonymous function yang lebih sederhana pembuatannya dan dapat mengakses var global dalam var lokal
// arrow function adalah function langsung mengembalikan data
// contoh arrow function
$first = 'muhammad';
$last = 'imron';
$sayHello = fn()=> "hello $first $last".PHP_EOL;
echo $sayHello();

// contoh anonymous function
$anonymous = function() use($first,$last):string{
    return
    "hello $first $last" . PHP_EOL;
};
echo $anonymous();