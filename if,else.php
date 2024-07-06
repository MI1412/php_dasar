<?php
// statement if
// digunakan untuk percabangan
// contoh syntax
$angka1 = 9;
$angka2 = 9;
echo "angka 1 = $angka1 angka 2 = $angka2 : \n";
// if ($angka1 > $angka2){
//     echo "$angka1 lebih besar sama dengan $angka2";
// }elseif ($angka1 < $angka2) {
//    echo "$angka1 lebih kecil sama dengan $angka2";
// }else{
//     echo "angkanya sama";
// }

// syntax alternatif
// selain menggunakan {kurung kurawal} php juga menyediakan syntax alternatif untuk menggunakan if, yaitu dengan menggunakan :(titik dua)
// untuk menggunakan syntax ini kita harus menambahkan kata kunci endif diakhir statement
// contoh :
if ($angka1 > $angka2):
    echo "$angka1 lebih besar sama dengan $angka2";
elseif ($angka1 < $angka2):
   echo "$angka1 lebih kecil sama dengan $angka2";
else:
    echo "angkanya sama";
endif;