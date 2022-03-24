<?php 
// ======================================= SUPER GLOBAL ============================================
// Merupakan Variabel Global Milik PHP
// Merupakan array asosiative


// ============== $_GET ====================
// $_GET["nama"] = "Muhammad Risky";
// var_dump($_GET);

// cara agar lain untuk menampilkannya ke web kita bisa langsung menambahkan tanda tanya(?) dan di lanjutkan key dan value di akhir domain web kita
// dan jika ingin menambahkan data lagi tinggal tambah menggunakan simbol & dan di lanjutkan dengan key dan value
// var_dump($_GET);
//  ============= Akhir Mateeri $_GET ================



//  Impelemtasi Tugas Kemarin
$parkir = [
    
        [
            "jenis_kendaraan" => "Mobil",
            "merek" => "MITSUBISHI",
            "nomor_kendaraan" => "B3030393",
            "jumlah_penumpang" => "4 ORANG",
            "gambar_kendaraan" => "mitsubishi.jpg"

        ],

        [   
            "jenis_kendaraan" => "Motor",
            "merek" => "HONDA-SCOOPY",
            "nomor_kendaraan" => "B97382826",
            "jumlah_penumpang" => "2 ORANG",
            "gambar_kendaraan" => "honda-scoopy.jpeg"

        ],



];
   


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DATA PARKIR</title>
        
    </head>
    <body>
        <h1>DATA PARKIR TAHUN 2022</h1>
        <ul>
            <?php foreach($parkir as $park) : ?>
                    <li>
                        <a href="/phpdasar/php/latihan/latihan5-miror.php?jenis_kendaraan=<?= $park["jenis_kendaraan"];?>
                        &merek=<?= $park["merek"];?>&nomor_kendaraan=<?= $park["nomor_kendaraan"];?>&jumlah_penumpang=
                        <?= $park["jumlah_penumpang"];?>&gambar_kendaraan=<?= $park["gambar_kendaraan"];?>"><?= $park["jenis_kendaraan"];?></a>
                    </li>
                    
            <?php endforeach; ?>
        </ul>
    </body>
    </html>
