<?php
// break continue
// pada switch statement kita sudah mengenal break yaitu untuk menghentikan case dalam switch
// sama dengan perulangan break juga digunakan untuk menghentikan seluruh perulangan
// namun berbeda dengan continue, yang digunakan untuk menghentikan perulangan saat ini lalu melanjutkan ke perulangan selanjutnya

// contoh break 
// $counter = 1;
// while(true){
//     echo "ini adalah break ke $counter\n";
//     $counter++;
//     if ($counter > 10){
//         break; // menghentikan loop
//     }
// }

// continue
// contoh kode :
for ($counter = 0; $counter <= 10;$counter++){
    if($counter %2 == 1){
        continue; // mengabaikan bilangan genap jika coba sebaliknya maka sama, ini mirip seperti skip
    }
    echo "ini adalah continue ke $counter\n";
}