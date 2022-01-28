<?php
require_once("require.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Petugas</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("header.php"); ?>
    <!-- Konten -->
    <h3>Tambah Petugas</h3>
    <form action="" method="POST">
        <table cellpadding="5">
            <tr>
                <td>Username :</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="text" name="pass"></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Pilih Level :</td>
                <td><select name="petugas">
    <?php
    $petugas = mysqli_query($db, "SELECT * FROM petugas WHERE level");
    while($r = mysqli_fetch_array($petugas)){ ?>
                        <option value="<?= $r['level']; ?>"><?= $r['level'] 
                         ?></option>;
    <?php } ?>      </select></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="simpan">Simpan</button></td>
            </tr>
            
        </table>
    </form>
<hr />
            <!-- Panggil footer -->
    <?php require("footer.php"); ?>
</body>
</html>
<?php
// Proses Simpan
if(isset($_POST['simpan'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $nama = $_POST['nama'];
    $simpan = mysqli_query($db, "INSERT INTO petugas(user, pass, nama) VALUES('$user', '$pass', '$nama' )");
        if($simpan){
            header("location: petugas.php");
            
        }else{
          
            echo "<script>alert('Data sudah ada');</script>";
        }
    
    }
?>