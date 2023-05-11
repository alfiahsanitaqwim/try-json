<?php
$file = "data.json";
$array = array();
// ambil data
$ambilData = file_get_contents($file);
$decodeData = json_decode($ambilData, true);

$data = array(
    'nama' => $_POST['nama'],
    'email' => $_POST['email'],
    'alamat' => $_POST['alamat'],
    'jurusan' => $_POST['jurusan'],
    'tahun' => $_POST['tahun'],
    'gender' => $_POST['gender']
);
    
array_push($decodeData, $data);
$json = json_encode($decodeData, JSON_PRETTY_PRINT);
file_put_contents($file, $json);
?>

   