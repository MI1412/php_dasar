<?php
// reference
// reference adalah mengakses variabel yang sama dengan nama variabel yang berbeda
// reference diphp tidak sama dengan dibahasa pemrograman seperti C/C++ yang memiliki fitur pointer
// analogi reference itu seperti file, jiksa variabel adalah file dan valuenya adalah isi filenya, maka reference adalah membuat shortcut (diwindows) atau alias(linux/mac) terhadap file yang sama
// saat kita mengubah isi dari value dari reference, maka secara otomatis value variabel aslinyapun berubah
// untuk membuat reference terhadap variabel, kita bisa menggunakan karakter &

// assign by reference / penanda dari reference
// pertama php reference bisa memungkinkan kita bisa membuat beberapa variabel menuju ke value yang sama
// contoh kode assign by reference
$name = 'paijo';
$otherName = &$name; // ini akan membuat variabel reference / shortcut di variabel name
$otherName = 'budi'; // jika value dari variabel shortcut dirubah maka variabel asalnya juga ikut berubah

echo $name.PHP_EOL;
echo $otherName.PHP_EOL;

// pass by reference
// selanjutnya yang bisa dilakukan di php adalah mengirim data ke function dengan reference
// contoh pass by reference
function increment(int &$nilai){ // tambahkan reference disini agar dapat mengirim nilai dari variabel argumen sebelumnya
    $nilai++;
}
$counter = 2;
increment($counter); // jika tidak ditambahkan reference maka variabel argumennya akan mengembalikan sesuai valuenya

echo $counter;

// returning references / mengembalikan beberapa referensi
// php juga bisa mengembalikan reference pada function
// namun hati hati gunakan fitur ini jika memang ada alasannya, karena fitur ini bisa membingungkan
// contoh
function &getValue(){
    static $value = 100;
    return $value; // mengembalikan reference atau shortcut
}

$a = &getValue();
$a = 200;
$b = &getValue();
echo PHP_EOL.$b.PHP_EOL;