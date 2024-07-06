<?php
// function
// function adalah block kode yang akan berjalan saat kita panggil
// contoh function tanpa argumen / void function
// function sayHello(){
//     echo "halo function\n";
// }

// sayHello();
// sayHello();

// lokasi function
// php sangat flexibel dalam pembuatan function
// tidak seperti pada bahasa pemrograman lain yang harus ada aturan lokasi dimana membuat function
// di php kita bebas membuat function dimanapun, bisa didalam if statement, didalam function dan sebagainya
// namun perlu diingat, jika kode function yang belum di eksekusi oleh php, maka function tersebut tidak akan bisa digunakan
// contoh
// $buat = false;
// if ($buat){ // jika kode program true maka function dalam if akan dieksekusi , jika false maka tidak akan bisa digunakan functionnya
//     function sayHello(){
//         echo "halo function\n";
//     }
// }
// sayHello();

// function argument
// kita mengirim data ke function yang ingin kita panggil
// untuk melakukan hal tersebut, kita perlu menambahkan argument / parameter di function
// cara membuat argumen sama seperti membuat variabel
// contoh function dengan argumen
// function sayHello($nama){
//     echo "halo $nama\n";
// }
// sayHello('imron');
// sayHello('budi');

// default nilai argument
// php mendukung default argument value
// fitur ini memungkinkan jika ketika kita memanggil function tidak memasukkan parameter, kita bisa menentukan data defaultnya apa
// contoh
// function sayHello($nama = "default"){ // <-- ini adalah nilai default argument
//     echo "halo $nama \n";
// }
// sayHello(); // ini adalah nilai default
// sayHello('imron');
// kesalahan saat membuat nilai default argumen
// nilai default argumen bisa disimpan argumen manapun
// namun jika argumen lebih dari satu, dan kita menyimpan default argument value di parameter awal maka itu kurang berguna
// pembuatan nilai default argumen disarankan berada paling akhir dalam parameter
// contoh
// function sayHello($nama = "default",$lastname) { // <-- nilai default di awal itu tidak berguna
//     echo "halo $nama $lastname\n";
// }
// // sayHello(); // ini adalah nilai default
// sayHello('imron'); // nilai default di awal tidak bisa dipanggil karena nilai default berada di posisi paling depan, maka dari itu nilai default pada parameter awal tidak berguna
