<?php
session_start();
include("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

if($username =="" && $password ==""){
    echo "<script>alert('username/password anda kosong')";


}else{
    $query = "SELECT * FROM petugas WHERE username= '$username' AND password = '".md5($password)."'";
    $result = mysqli_query($db,$query);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $data=mysqli_fetch_array($result);
        $_SESSION['username']=$username;
        header("location:../index.php");
        $_SESSION['level']=$data['level'];

    }else{
        echo "<script>alert('username/password anda salah');location.href='form-login.html';</script>";
      echo"$query";
    }

}
?>
