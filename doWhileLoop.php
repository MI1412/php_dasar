<?php
// do while loop
// hampir mirip dengan while loop
// perbedaannya hanya pada pengecekan kondisi
// pengecekan kondisi di while loop dilakukan diawal sebelum perulangan dilakukan, sedangkan do while loop dilakukan setelah perulangan dilakukan
// oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true  
// contoh
$counter = 100; // jika memasukkan input salah itu tidak apa apa di dowhile tetapi hanya mengeluarkan jawaban cuma sekali
do{
    echo "do while loop ke $counter\n";
    $counter++;
}while($counter <= 10);