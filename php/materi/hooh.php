<?php 



// $data = [
        
//     [
//         "nama" =>["MUHAMMAD RISKY", "ADI CAHYA SAPUTRA",]
//     ],
// ];


// echo $data[0]["nama"][1];


$data = [
    [ 
        "nama" =>"Muhammad Risky",
        "kelas" => "XI-RPL",
        "Jurusan" => "RPL",
    ],
    
    [
        "nama" => "Adi Cahya Saputra",
        "kelas" => "XI-RPL",
        "Jurusan" => "RPL",
    ]

];
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
        <?php foreach($data as $dta) :?>
            <li><?= $dta["nama"];?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
