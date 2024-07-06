<?php
// goto operator
// salah satu fitur sebenarnya jarang sekali digunakan diphp yaitu goto operator
// kenapa jarang digunakan karena jika terlalu banyak menggunakan goto operator, kode program aplikasinya akan mudah membingungkannya yang membaca kodenya
//  goto adalah fitur bisa loncat kode program dengan keinginan kita
// agar goto bisa loncat ke kode program, kita harus membuat label diphp dengan menggunakan ;(titik koma) nama label lalu diakhiri :(titik dua), contoh:
// memberi label
goto b;
echo "hallo i \n";

// label yang sudah ditandai
a:
echo "hallo A\n";

// label yang sudah ditandai
b:
echo "hallo b\n";

// contoh di loop
$counter = 1;
while(true){
    echo "\nloop ke $counter\n";
    $counter++;
    if ($counter > 10){
        goto end;
    }
}
end:
// goto bisa menggunakan menghentikan program
echo "\nloop berhenti";