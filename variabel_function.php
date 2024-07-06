<?php
// variabel function
// php mendukung konsep yang bernama variabel function
// variabel function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variabel
// untuk menggunakan variabel function, kita bisa secara langsung memanggil $namaVariabel(), jika ingin menambahkan argument, kita bisa menggunakan $namaVariabel(argumen)
// contoh variabel function
// ini ada sebuah function menampilkan nama
function imron(){ // biasanya untuk memanggil function cukup memanggil nama function()
    echo "imron",PHP_EOL; // akan mengeluarkan nama dari function
}

function muhammad(){
    echo "muhammad",PHP_EOL;
}

$f_name1 = 'imron'; // tetapi sekarang bisa memanggil variabel function
$f_name2 = 'muhammad';
$f_name2($f_name1); // <-- argumen di variabel function
$f_name1($f_name2);
// kegunaannya bisa memasukkan nama function yang lain
// contoh
function sayhello(string $name, $filter){
    $namaFilter = $filter($name); // membuat method filter pada string
    echo "hello $namaFilter\n";
}
// kita bisa membuat function sendiri
function upper(string $name):string{ // ini akan mengirim function kedalam argumen function sayhello kemudian diolah menjadi nama difilter kemudian menampilkan namafilter
    return "nama di upper ".strtoupper($name);
}
sayhello('budi','strtoupper');
sayhello('BUDI','strtolower');
sayhello('amir','upper');