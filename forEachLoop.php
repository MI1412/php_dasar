<?php
// for each loop adalah perulangan data array
// kadang kita akses data array menggunakan perulangan
// mengakses data array sebenarnya sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat
// namun untungnya diphp terdapat perulangan bernama for each yang bisa digunakan untuk mengakses seluruh data di array secara otomatis
// contoh perulangan biasa forloop
$name= ['muhammad','imron'];
// for ($i = 0;$i < count($name); $i++){
//     echo "ini dari for loop : $name[$i]\n";
// }
// contoh for each dengan key
$person = [
    'first'=> 'muhammad',
    'last'=> 'imron'
];
// cara baca function foreach mengulangi ($var_array as/alias $key){kondisi}
// foreach ($person as $key => $value){
//     echo "$key : $value \n";
// }

// foreach dengan index
foreach ($name as $index => $name){
    echo "data index $index value $name\n";
}