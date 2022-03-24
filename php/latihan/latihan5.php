<!--  ============================= CONTOH KASUS DALAM MEMBUAT DATA KOMPUTER ===========================  -->
<?php

    $parkir = [

        [
            "jenis kendaraan" => "Mobil",
            "merek" => "MITSUBISHI",
            "nomor kendaraan" => "B3030393",
            "jumlah penumpang" => "4 ORANG",
            "gambar kendaraan" => "mitsubishi.jpg"

        ],
        [
            "jenis kendaraan" => "Mobil",
            "merek" => "AVANZA",
            "nomor kendaraan" => "B3454646",
            "jumlah penumpang" => "4 ORANG",
            "gambar kendaraan" => "avanza.jpg"

        ],
        [
            "jenis kendaraan" => "Motor",
            "merek" => "HONDA-SCOOPY",
            "nomor kendaraan" => "B97382826",
            "jumlah penumpang" => "2 ORANG",
            "gambar kendaraan" => "honda-scoopy.jpeg"

        ],
        [
            "jenis kendaraan" => "Mobil",
            "merek" => "TOYOTA-SUPRA",
            "nomor kendaraan" => "Z456734",
            "jumlah penumpang" => "2 ORANG",
            "gambar kendaraan" => "toyota-supra.jpg"

        ],
        [
            "jenis kendaraan" => "Motor",
            "merek" => "PESPA-METIK",
            "nomor kendaraan" => "C4635373",
            "jumlah penumpang" => "2 ORANG",
            "gambar kendaraan" => "pespa-metik.jpg"

        ]



    ];
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DATA PARKIR</title>
        <style>
            * {
                margin:5px;
            }
            ul {
                list-style:none;
            }
            img {
                width:200px;
                height:200px;
            }
        </style>
    </head>
    <body>
        <h1>DATA PARKIR TAHUN 2022</h1>
        <?php foreach($parkir as $park) : ?>
            <ul>
                <li>
                    <img src="gambar/<?= $park["gambar kendaraan"]; ?>">
                </li>
                <li>JENIS KENDARAAN: <?= $park["jenis kendaraan"]; ?></li>
                <li>MEREK: <?= $park["merek"];?></li>
                <li>NOMOR KENDARAAN: <?= $park["nomor kendaraan"];?></li>
                <li>JUMLAH PENUMPANG: <?= $park["jumlah penumpang"];?></li>
            </ul>
        <?php endforeach; ?>

    </body>
    </html>
