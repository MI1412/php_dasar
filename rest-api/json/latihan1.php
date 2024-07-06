<?php
// $orang = [[
//     "nama"=>"muhammad imron",
//     "email" => "imronm1309@gmail.com"
// ],
// [
//     "nama"=>"muhammad otong",
//     "email" => "yayyaa@gmail.com"
// ]
// ];



// mengubah array atau object menjadi json
// $data_json = json_encode($orang);
// echo $data_json;
// ini array asosiatif / kumpulan array
// var_dump($orang);

// mengambil database mysql
$dbh = new PDO('mysql:host=localhost;dbname=phpdasar','root');
$db = $dbh -> prepare('SELECT * FROM siswa');
$db->execute();
$siswa = $db-> fetchAll(PDO::FETCH_ASSOC);
// mengambil data dari database di ubah ke json
$data_json = json_encode($siswa);
echo $data_json;