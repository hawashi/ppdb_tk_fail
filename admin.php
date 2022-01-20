<?php
require 'function.php';
    if (isset($_POST['daftar'])) {
        $nama_admin = $_POST['nama_admin'];
        $username = $_POST['username'];
        $no_kk = $_POST['no_kk'];
        $password = md5($_POST['password']);

        $query = "INSERT INTO admin VALUES ('', '$nama_admin', '$username', '$no_kk', '$password')";
        mysqli_query($conn, $query);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <input type="text" name="nama_admin" id="" placeholder="nama">
    <input type="text" name="username" id="" placeholder="username">
    <input type="text" name="no_kk" id="" placeholder="no kk">
    <input type="password" name="password" id="" placeholder="passsword">
    <button type="submit" name="daftar">dftr</button>
</form>

</body>
</html>