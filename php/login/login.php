<?php

if (isset($_POST["submit"])){

    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
        header("Location : admin.php");

    }else {
        $error = true;
    }


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN KE HALAMAN ADMIN</title>
</head>
<body>
    <h1>Login Untuk Kehalaman Admin</h1>
    <?php if( isset($error) ) :?>
        <p style="color: red; font-style:italic;">Username / Password Yang anda Masukan Salah</p>
    <?php endif; ?>
    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">Username :</label>
                <input type="text" name = "username" id="username">
            </li><br>
            <li>
                <label for="password">Password :</label>
                <input type="password" name = "password" id="password">
            </li><br>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </form>
    </ul>
</body>
</html>