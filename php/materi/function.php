<?php
//====================== build in function=========================
// ====================Date/time================
// untuk menambahkan tanggal dengan format tertentu
    // echo date("l, d-m-y");

// ==================TIME==================
// UNIX TimeStamp  / EPOCH Time
// Detik Yang sudah berlalu sejak 1 januari 1970
    // echo time();

// echo date("l, d m y", time() - 60 * 60 * 24 * 2);
// =========================================


// ==================mktime================
// membuat detik sendiri
// mktime(0,0,0,0,0,0) 6 parameter
// jam, menit , deik, bulan, tanggal, tahun

// echo date("l d m y", mktime(0,0,0,5,16,2005));
// =================================================

// strtotime
// echo date("l d m y", strtotime("16 may 2005"));
// =======================================================================
?>


<!-- ====================== user define function ==================== -->

<?php 

function salam($waktu ="Pagi", $nama="Muhammad Risky"){
    return "Selamat $waktu $nama!";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User define function</title>
</head>
<body>
    <h1><?= salam();?></h1>
</body>
</html>