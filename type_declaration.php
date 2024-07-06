<?php
// type declaration
// sama seperti variabel, argument di php bisa kita masukkan data yang dinamis
// kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
// untungnya function di php, kita bisa menambahkan type data di argument, sehingga php akan melakukan pengecekan ketika kita mengirim value ke function tersebut
// jika tipe data value tidak sesuai maka akan terjadi error
// secara default php akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe data int tapi kita mengirim string, maka php akan otomatis mengkonversi string tersebut menjadi int
// // contoh variabel dinamis
// function sayHello($a,$b){ // <-- ini variabel dinamis
//     echo "halo $a $b\n";
// }

// sayHello(10,9); // ini variabel dinamis

// // macam macam tipe yang valid ke-1
// // type = class ; ket = param harus tipe class / interface
// // type = self ; ket = param harus sama dengan class dimana function ini dibuat
// // type = array ; ket = param harus array
// // type = callable ; ket = param harus callable
// // type = bool ; ket = param harus boolean
// // type = float ; ket = param harus floating poin
// // type = int ; ket = param harus int number
// // type = string ; ket = param harus string
// // type = interable ; ket = param harus array / tipe traversable
// // type = object ; ket = param harus sebuah objek
// // contoh penambahan type declaration pada function
// function tambah(int $a, int $b){ // jika tipe datanya berbeda maka akan otomatis di konversi agar sesuai dengan tipe data pada argumen
//     $total = $a + $b;
//     echo "total dari $a + $b = $total\n";
// }
// tambah(true,'9'); // jika mencoba mengirim data bukan int maka akan otomatis dikonversi ke int