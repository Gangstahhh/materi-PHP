<?php 

//  Penggulangan pada array
//  for / foreach


$angka = [3,5,10,40,88,400,67];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 3 array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height:50px;
            margin:3px;
            float:left;

        }

        .clear {
            clear:both;
        }
    </style>
</head>
<body>
    <!-- ============ Menggunakan For ================= -->
    <?php for($i = 0; $i < count($angka); $i++){ ?>

    <div class="kotak"><?php echo $angka[$i]?></div>
<?php } ?>

<div class="clear"></div>
<!-- =============== Menggunakan foreach =================== -->
<?php foreach($angka as $a) {?>
    <div class="kotak"><?php echo $a; ?></div>

<?php }?>
<div class="clear"></div>
<!-- ==================== Gaya Penulisan Teampaleting =================== -->
<?php foreach($angka as $a) : //Tanda Kurung Di ganti Titik Dua?> 
    <div class="kotak"><?= $a; //tanda php dinganti dengan sama dengan dan echo di hilangkan. di gunakan saat hanya menampilkan 1 element saja?></div>
    <?php endforeach; //Dan di akhiri dengan endforeach dan jgn lupa titik koma (;) ?>
<div class="clear"></div>
</body>
</html>