<?php
// recursive function
// recursive function adalah kemampuan sebuah function memanggil functionnya sendiri
// kadang, memang ada banyak problem yang lebih mudah diselesaikan kalau menggunakan recursive function seperti contoh membuat angka factorial
// contoh function factorial loop
function factorialLoop(int $value):int{
    $total = 1;
    for ($i = 1;$i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(5));

// contoh function factorial recursive
function factorialRecursive(int $value): int {
    if ($value == 1){
        return 1;
    }else{
        return $value * factorialRecursive($value - 1); // <-- ini adalah recursive function, function memanggil dirinya sendiri
    }
} // cara baca code funct ini pertama membuat var bertipe int dan kembalian bertipe int kemudian kondisi benar jika $var sama dengan 1 maka kembalikan 1, jika kondisi salah kembalikan $var dan dikali input dari function kemudian $var dikurang 1

var_dump(factorialRecursive(3));

// masalah dengan recursive
// walaupun recursive function itu sangat menarik, namun kita perlu berhati hati
// jika recursive terlalu dalam, maka akan ada kemungkinan terjadi memory overflow yaitu eror, dimana memory terlalu banyak digunakan di php
// kenapa masalah ini bisa terjadi? karena ketika kita memanggil function, php akan menyimpannya dalam stack / tumpukan,jika function tersebut memanggil function lain, maka akan membutuhkan konsumsi memory yang besar, jika sudah melewati batas maka akan terjadi eror memory
// contoh eror stackOverflow
function loop(int $value){
    if ($value == 0){
        echo "selesai".PHP_EOL;
    }else{
        echo "loop-$value".PHP_EOL;
        loop($value-1);
    }
}

loop(900000000000);
