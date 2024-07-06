<?php
// require dan include
// saat membuat aplikasi ada baiknya tidak dibuat dalam satu file
// lebih baik dipisah ke beberapa file agar kode programnya tidak terlalu bertumpuk disatu file
// php memiliki function require dan include yang bisa kita gunakan untuk mengambil file php lain
// lantas apa bedanya require dan include?
// pada require jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
// pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan

// misal ada file myFunction.php
// include "lib/myFunction.php"; // tempatfolder/file tujuan
// echo sayhalo('imron');

// require "lib/myFunction.php";
// echo sayhalo('tes');

// posisi require dan include
// kode program php akan dibaca dari atas kebawah, oleh karena itu pastikan posisi require dan include sesuai dengan yang kita inginkan
// misal jika sampai kit salah menempatkan posisi require dan include, bisa jadi kita malah memanggil function yang belum ada
// contoh
// echo sayhalo('imron');
// include 'lib/myFunction.php'; // ini salah penempatan posisi include yang benar itu deklair dulu kemudian memanggil function dalam file

// require_once dan include_once
// function require dan include akan selalu mengambil file yang kita inginkan
// jika kita beberapa kali menggunakan require dan include file yang sama, maka file terebut akan berkali kali pula kita ambil
// hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi function, sehingga jika diambil berkali akan menyebabkan eror redeclair function
// untungnya diphp terdapat function_once dan include_once, function ini bisa mendeteksi jika kita sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi

// contoh include_once
include_once 'lib/myFunction.php'; // ini akan memastikan file itu di pakai sekali
// include_once 'lib/myFunction.php';

echo sayhalo('imron');
// contoh require_once
require_once 'lib/myFunction.php';
echo sayhalo('amir');