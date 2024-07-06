<?php
// callback function
// callback adalah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan di argumen
// hal ini sebenarnya sudah kita lakukan di materi variabel function dan anonymous function
// namun diphp ada cara lain untuk implementasi callback yaitu menggunakan tipe data callable
// dan untuk memanggil callback function tersebut, kita bisa menggunakan function call_user_funct(callable,arguments)

// kesimpulan
// callback adalah cara pemanggilan funtion yang lain sesuai dengan yang diberikan diargumen

// contoh

use PhpParser\Node\Expr\FuncCall;

function sayhello(string $name, callable $filter){
    $namaFilter = call_user_func($filter,$name); // call_user_funct($variabel yang dicallable / nama function,$namaArgumen)
    echo "halo $namaFilter".PHP_EOL;
};
sayHello('imron','strtoupper');
sayHello('AMIR','strtolower');
sayhello('eko', function (string $name):string{
    return strtoupper($name);
}); // menggunakan anonymous funct
sayhello('musa', fn($name)=> (strtoupper($name))); // menggunakan arrow function, di arrow function ini => mmengembalikan nilai / return value