<?php
session_start();
require_once("connect.php");

if(!isset($_SESSION['username'])){
    header("location: login.php");

}
else{
    $username = $_SESSION['username'];

}
?>
<html>
    <head>
        <title>Aplikasi Pembayaran SPP</title>
    </head>
<body>
<!-- Kita akan panggil menu navigasi -->
<?php require_once("header.php"); ?>
<h3>Selamat datang, <?= $username; ?></h3>
            <br />
Silahkan dikelola dengan baik yaa  
            <hr />
<?php require_once("footer.php"); ?>
</body>
</html>