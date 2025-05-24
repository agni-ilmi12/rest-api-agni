<?php 

// $mahasiswa = [
//     [
//         "nama" => "Agni Ilmi Anaya",
//         "nim" => "2217020065",
//         "email" => "agni.anaya@gmail.com"
//     ],
//     [
//         "nama" => "Anita",
//         "nim" => "2217020046",
//         "email" => "anitaava@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=iap_uas', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>