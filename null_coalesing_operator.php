<?php 
// null coalesing operator
// sebelumnya kita tahu data kosong di presentasikan dengan data null di php
// dan hal yang paling repot diphp adalah mengecek apakah sebuah data ada atau tidak, dan juga apakah data tersebut isi datanya null / bukan
// biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan funct isset($variabel)
// namun untungnya di php ada null coalesing operator menggunakan tanda ??

// contoh pengecekan menggunakan if / tanpa null coalescing operator
$data = [
    'nonne'=> "yayya"
];
if (isset($data['action'])){
    $action = $data['action'];
}else{
    $action = 'nothing';
}
echo $action;

// contoh menggunakan null coalescing operator
// cara baca :
// $variabel = $dataDicari['indeks'] ?? 'nothing' <-- ?? mengecek apakah ada array indeks kalau tidak ada kembalikan nilai nothing 
$action = $data['action'] ?? 'nothing';
echo PHP_EOL,$action;