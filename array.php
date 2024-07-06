<!-- <?php
// array itu adalah kumpulan data dari semua tipe data
$tes_array = [1,5,true,false,'ayyya',000];
echo "isi array : ";
var_dump($tes_array);
echo "array : ";

// akses data array
var_dump($tes_array[4]); // mengambil index ke 5 output = ayyya

// mengubah data array
$ubah_array = $tes_array[1>5]= 'tes';
echo "isi data indeks ke enam dirubah : $ubah_array\n";
var_dump($tes_array[1>5]); // ini entah kenapa bisa berfungsi
// ini entah kenapa data indeks dirubah kemudian data indeks ke 1 tidak berfungsi

// menambah data array
$tes_array = [1,2,3,4,5,6.5,true];
$add_array = $tes_array[] = .90; // menambah array paling belakang
echo "tambah array : $add_array \nisi array : ";
var_dump($tes_array);

// menghapus data array 
// hati hati jika ingin menghapus data array soalnya indeks array nya benar hilang
unset($tes_array[1]); // menghapus 2 dari array
echo "\nisi array : ";
var_dump($tes_array);
echo "\napakah benar hilang index 1 : ";
var_dump(isset($tes_array)); // mengecek index 1
// menghitung total array
$total = count($tes_array);
echo "\ntotal array : $total";

// di php bisa digunakan sebagai map
// map adalah kumpulan dari key dan value
// diphp map bisa dibuat menggunakan array 
// secara default array akan menggunakan index(number) sebagai key dan value kita bebas memasukkan data ke dalam array
// namun jika ingin merubah indexnya tidak harus number, bisa menggunakan tipe data lain seperti string
// hal tersebut seperti map di bahasa pemrograman lain

// contoh:
$imron = array(
    'id'=> '1412',
    'nama'=> 'm.imron',
    'age'=> 17
);
// atau
$imron = [
    'id'=> '1412', //namanya tidak boleh sama jika ada yang sama outputnya maka tetap satu
    'nama'=> 'm.imron',
    'age'=> 17
];

echo "isi : ";
var_dump($imron); // mengambil semua isi map array
echo "index ke-id : ";
var_dump($imron['id']); // mengambil salah satu map

// contoh array dalam array

$imron = [
    'id'=> '1412', //namanya tidak boleh sama jika ada yang sama outputnya maka tetap satu
    'nama'=> 'm.imron',
    'age'=> 17,
    'address'=> [
        'city'=> 'surabaya',
        'negara'=> 'indonesia'
    ]
];

echo "isi array : ";
var_dump($imron);

// mengakses array dalam array mengambil addres
echo 'addres : ';
var_dump($imron['address']); // mengambil semua alamat
// mengambil alamat negara
echo 'negara : ';
var_dump($imron['address']['negara']); // mengambil alamat negara
