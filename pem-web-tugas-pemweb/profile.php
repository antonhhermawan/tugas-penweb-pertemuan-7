<?php 

session_start();
if($_SESSION['role'] != 'user') {
    echo "anda bukan role user";
    header('Location: ./admin.php');
}

if(!isset($_SESSION['login'])){
    header('Location: ./index.php');
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
    <h1>Selamat datang <?= $_SESSION['name'];?></h1>
    <a href="./logout.php">Logout</a>
    <a href="./show.php">lihat data</a>
    <a href="./create.php">tambah data</a>
</body>
</html>