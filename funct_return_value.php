<?php
// function return
// secara default function itu tidak menghasilkan nilai / value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
// dan didalam block function untuk menghasilkan nilai tersebut, kita harus menggunakan kunci return, lalu diikuti dengan data yang ingin dihasilkan
// kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu
// contoh function dengan return
function tambah(int $a, int $b){
    return $a + $b;
}
$total = tambah(1,2);
var_dump($total);

$total = tambah(10,90);
var_dump($total);

// contoh function return dengan beberapa kondisi
function kalkulator(int $a, string $b, int $c){
    if ($b == '+'){
        return $a + $c;
    }elseif ($b == '-'){
        return $a -$c;
    }elseif ($b == '/'){
        return $a / $c;
    }elseif ($b == '*'){
        return $a * $c;
    }else{
        return "ini bukan operasi kalkulator";
    }
}

$tambah = kalkulator(1,'+',1);
echo "hasil tambah = $tambah\n";
$kurang = kalkulator(1,'-',1);
echo "hasil kurang = $kurang\n";
$kali = kalkulator(1,'*',1);
echo "hasil kali = $kali\n";
$bagi = kalkulator(1,'/',1);
echo "hasil bagi = $bagi\n";
$notFound = kalkulator(9,'ini bukan operasi mtk',9);
echo "hasil operasi mtk = $notFound\n";

// tipe deklarasi pada return
// sama seperti pada argumen, pada return value pun kita bisa mendeklarasikan tipe datanya
// hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
// untuk mendeklarasikan tipe data kembalian function, setelah kurung() kita bisa tambahkan: diikuti tipe data kembaliannya
// contoh deklarasi return tipe data
function kurang(int $a, int $b): int // ini adalah deklarasi tipe data pada return
{
    return $a - $b;
}

$pengurangan = kurang(1,1);
echo "hasil pengurangan = $pengurangan\n";

// contoh deklarasi tipe data pada kondisi
function nilai($value):string{
    if ($value <= 50 ){
        return "D";
    }elseif ($value <= 74){
        return 'C';
    }elseif ($value <= 80){
        return 'B';
    }elseif ($value >= 80 && $value < 100){
        return 'A';
    }else{
        return "bukan int";
    }
}

$A = nilai(90);
$B = nilai(80);
$C = nilai(70);
$D = nilai(50);
$notInt = nilai('bukan');
echo $A,PHP_EOL;
echo $B,PHP_EOL;
echo $C,PHP_EOL;
echo $D,PHP_EOL;
echo $notInt,PHP_EOL;