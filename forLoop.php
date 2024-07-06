<?php
// for loop
// perulangan for
// blok kode yang terdapat didalam for akan selalu diulang selama kondisi terpenuhi
// sintaks for
// for(init statement; kondisi;post statement){
// block perulangan
// }
// init statement akan dieksekusi hanya sekali diawal sebelum perulangan
// kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
// post increment akan dieksekusi setiap kali di akhir perulangan
// init statement, kondisi dan post statement tidak wajib diisi, jika kondisi tidak diisi, berarti kondisi selalu bernilai true
// jika ketiga kondisi tidak diisi akan true
// for(; ;){
//     echo "ini adalah for loop\n";
// }

// coba membuat perulangan dengan kondisi
$counter = 1;
// for(;$counter<=10;$counter++){
//     echo $counter,PHP_EOL;
// }

// coba membuat perulangan dengan init statement, init statement termasuk variabel lokal
// for ($counter = 10;$counter >= 1;$counter--){
    // echo "\nini for loop ke-$counter";
// }

// syntax alternatif for loop menggunakan : kemudian diakhiri endfor;
// contoh:
for($counter = 0;$counter <= 10; $counter++):
    echo "for loop ke $counter\n";
endfor;    
