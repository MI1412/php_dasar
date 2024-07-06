<?php
// anonymous function
// anonymous function adalah function tanpa nama, di php disebut juga dengan closure
// anonymous function biasanya digunakan sebagai argumen atau sebagai value di variabel
// anonymous function membuat kita bisa mengirim function sebagai argumen di function lainnya
// contoh anonymous function
$sayHello = function(string $name){ // anonymous function adalah function tanpa nama function, cara pemanggilannya memakai nama $variabel()
    echo "hello $name",PHP_EOL;
};
$sayHello('budi');
$sayHello("\np");
// untuk membuktikan ini anonymous function cukup memakai vardump($namavariabelfunction)
// var_dump($sayHello);
// dengan anonymous function kita bisa mengirim argumen function ke argumen lain
// contoh
function sayHello(string $name,$filter){
    $namaFilter = $filter($name);
    echo "halo $namaFilter\n";
}
// sayHello('imron',function (string $name):string{ // ini akan membuat anonymous function sebagai argumen
//     return strtoupper($name);
// }); atau juga bisa seperti ini
$filterName = function(string $name):string{
    return strtoupper($name);
};
sayHello('amir',$filterName);

// mengakses variabel diluar closure
// secara default, anonymous function tidak bisa mengakses variabel yang terdapat diluar function
// jika kita ingin menggunakan variabel yang terdapat diluar anonymous function, kita perlu secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti variabel-variabel yang ingin kita gunakan
// contoh
$first = 'muhammad'; // <- ini tidak akan bisa diakses oleh anonymous function krn var ini var global sedangkan yang di anonymous function adalah var lokal
$last = 'imron';
$sayHelloImron = function () use ($first,$last) { // jika kalian ingin mencoba mengakses variabel global gunakan use(nama variabel global)->
    echo "hello $first $last",PHP_EOL;
};
$sayHelloImron();

// contoh yang biasa dilakukan oleh anonymous function
// $first = 'muhammad';
// $last = 'amir';
// $sayHelloAmir = function ($first,$last){// <-- var first dan var last termasuk kedalam var lokal bukan global
//     echo "halo $first $last",PHP_EOL;
// };

// $sayHelloAmir();