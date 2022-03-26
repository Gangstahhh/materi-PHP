<?php 

require('functions.php');
$kendaraan = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        td {
            text-align: center;
        }
    </style>
    <title>MENYAMBUNGKAN PHP KE DATABASE</title>
</head>
<body>
    <h1>Daftar Kendaraan</h1>
    
    <table border = "1" cellspadding = "10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Jenis Kendaraan</th>
            <th>Nomor Kendaraan</th>
            <th>Merek</th>
            <th>Jumalah Penumpang</th>
        </tr>

        <?php $i = 1;?>
        <?php foreach($kendaraan as $row) :?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td>
                    <img src="gambar/<?= $row["gambar"];?>" alt="avanza" width="300px" height="200px">
                </td>
                <td>
                    <?= $row["jenis kendaraan"];?></td>
                <td>
                    <?= $row["nomor kendaraan"];?>
                </td>
                <td>
                    <?= $row["merek"];?>
                </td>
                <td>
                    <?= $row["jumlah penumpang"];?>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach;?>
    </table>
</body>
</html>