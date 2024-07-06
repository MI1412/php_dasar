<?php
// switch statement
// switch statement adalah statement percabangan yang sama dengan if
// kondisi switch statement hanya digunakan untuk perbandingan ==
// contoh :
$nilai = 5;
// switch($nilai){
//     case 1 < 9:
//     case 8 > 10:
//         echo "angka2\n";
//         break;    
//     default:
//     echo "bukan angka";  
// }

// syntax alternatif
switch($nilai):
    case 1 < 9:
    case 8 > 10:
        echo "angka2\n";
        break;    
    default:
    echo "bukan angka";  
    endswitch;