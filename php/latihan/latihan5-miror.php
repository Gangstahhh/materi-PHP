<?php

// cek apakah tidak ada data di $_GET

if ( !isset($_GET["jenis_kendaraan"])|| 
    !isset($_GET["merek"])|| 
    !isset($_GET["nomor_kendaraan"])|| 
    !isset($_GET["jumlah_penumpang"])|| 
    !isset($_GET["gambar_kendaraan"])){

    // redirect
    header("Locattion: /phpdasar/php/latihan/latihan5-miror.php");
    exit;
}










?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <li><img src="gambar/<?= $_GET["gambar_kendaraan"];?>" alt=""></li>
    <li><?= $_GET["jenis_kendaraan"];?></li>
    <li><?= $_GET["merek"];?></li>
    <li><?= $_GET["nomor_kendaraan"];?></li>
    <li><?= $_GET["jumlah_penumpang"];?></li>
    <li><a href="/phpdasar/php/materi/get&post.php">Kembali Ke Halaman Awal</a></li>
</ul>
</body>
</html>