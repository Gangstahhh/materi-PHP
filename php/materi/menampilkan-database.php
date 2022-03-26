<?php 
$result = mysqli_query($conn, "SELECT * FROM nama databasenya"); 
// ambil data siswa dari object result;
// mysqli_fecth_row() // mengembalikan array numerick
    // $mhs = mysqli_fetch_row($result);
    // var_dump($mhs[3]);
// mysqli_fetch_assoc() // mengembalikan array assosiative
    // $mhs = mysqli_fetch_assoc($result);
    // var_dump($mhs["jurusan"]);
// mysqli_fetch_array() //Mengambalikan keduanya
    // $mhs = mysqli_fetch_array($result);
    // var_dump($mhs[0]);
// mysqli_fetch_object() // menampilkan menggunakan object
    // $mhs = mysqli_fetch_object($result); //menggunakan -> dan di sambung dengan nama field yang ingin di panggil
    // var_dump($mhs -> nama);

// Menampilkan semua isi tabel menggunakan looping
    // while($mhs = mysqli_fetch_object($result)) {
    //     var_dump($mhs);
    // }

?>