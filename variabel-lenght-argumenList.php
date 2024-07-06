<?php
// panjang variabel pada list argument
// merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
// panjang variabel pda list argumen secara otomatis akan membuat argument menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
// panjang variabel pada argumen list hanya bisa dilakukan di argument posisi terakhir
// untuk membuat panjang variabel pada argumen list bisa dilakukan di posisi terakhir
// untuk membuat panjang variabel argument list bisa menggunakan tanda ...(titik tiga kali) sebelum nama argumen
// contoh

function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "total ",implode(" + ",$values)," = $total\n";
}
// jika terlanjur membuat variabel array cukup tambahkan ...(titik tiga) didepan variabel array akan mengconversi array ke int
$values = [1,2,3,4,5];

sumAll(10,20,60,90); // ini mengirim param dengan biasa
sumAll(...$values); // ini dengan panjang variabel argumen list memakai array

