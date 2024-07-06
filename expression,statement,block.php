<?php
// expression 
// expression adalah bagian terpenting di php
// diphp hampir semua kode yang ditulis adalah expression, sederhananya expression adalah apapun yang memiliki nilai atau value
// contoh :
$a = 5; // 5 ini adalah expression
$b = $a; // dan $a adalah expression

// contoh expresion complex :
// pada contoh dibawah getvalue() adalah expression, karena getvalue() bernilai angka 100
function getValue(){
    return 100;
}
$value = getValue();

// statement
// bisa dibilang kalimat lengkap dalam bahasa
// sebuah statement berisikan eksekusi komplit, biasanya diakhiri titi koma
// contoh :
$name = 'imron'; //<-- ini adalah statement
echo $name;

// block
// block adalah kumpulan statement yang terdiri dari nol atau lebih statement
// block diawali dan diakhiri kurung kurawal{}
// contoh :
function get(){ // <-- ini adalah pembatas blok atau biasa ku panggill body funct
    return"hai"; // <--- statement
} // <-- ini adalah pembatas blok