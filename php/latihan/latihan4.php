<?php 
//  ======================= Latihan dengan Data Mahasiswa ==============================
// Membuat array di dalam array bisa di lakukan dengan membungkus nilai yg ada dengan array lagi
// $mahasiswa = [
//     ["Muhammad Risky", "0056972003", "Rekayasa Perangkat Lunak", "riskymuhammad352@gmail.com"],
//     ["Adi Cahya Saputra", "005691234", "Rekayasa Perangkat Lunak", "adicss234@gmail.com"],
//     ["Bayu Setiawan", "0058675234", "Rekayasa Perangkat Lunak", "bayy345@gmail.com"]
// ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <!-- ========================  Veri Simpel Untuk Membuat perulangan array mengunakan foreach ======================= -->
    <!-- <h1>Daftar Mahasiswa</h1> -->
    <!-- <ul>
        <?php //foreach($mahasiswa as $mhs) : ?> 
            <li><//?= $mhs;?></li>
        <?php //endforeach;?>
    </ul> -->
    <!-- ============================================================================================================================= -->
    <!-- ============== Menampilkan dua nilai array ================= -->
    <?php //foreach($mahasiswa as $mhs) : ?>
    <!-- <ul>
        <li>Nama : <?//= $mhs[0]?></li>
        <li>NISN : <?//= $mhs[1]?></li>
        <li>Jurusan : <?//= $mhs[2]?></li>
        <li>Email: <?//= $mhs[3]?></li>
    </ul> -->
    <?php //endforeach;?>
    <!-- =================== END =========== ============-->
    <?php 
    // ==================== ASSOCIATIVE ARRAY =================================== 
    // definisinya sama dengan array numerik tapi 
    // Key-nya adalah string yang kita buat sendiri 
    $mahasiswa = [
    [
        "nama" => "Muhammad Risky", // mengunakan tanda panah (=>)
        "NISN" => "0056972003",
        "jurusan" => "Rekaya Perangkat Lunak",
        "email" => "riskymuhamad352@gamil.com"
    ],

    [
        "nama" => "Adi Cahya Saputra", // mengunakan tanda panah (=>)
        "NISN" => "00873848465",
        "jurusan" => "Rekaya Perangkat Lunak",
        "email" => "adicss34@gamil.com"
    ]


];
    //Menampilkan Kelayar hanya perlu menggunakan key string yang di buat
    // echo $mahasiswa["jurusan"]; 

    // Menampilkan email adi 
    echo $mahasiswa[0]["email"];

    
    ?>
</body>
</html>