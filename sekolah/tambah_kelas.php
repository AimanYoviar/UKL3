<?php
require_once("require.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kelas</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("header.php"); ?>
    <!-- Konten -->
    <h3>Tambah Kelas</h3>
    <form action="" method="POST">
        <table cellpadding="5">
            <tr>
                <td>Nama Kelas :</td>
                <td><input type="text" name="nama_kelas"></td>
            </tr>
            <tr>
                <td>jurusan :</td>
                <td><input type="text" name="jurusan"></td>
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
    $nama = $_POST['nama_kelas'];
    $jurusan = $_POST['jurusan'];
    $simpan = mysqli_query($db, "INSERT INTO kelas VALUES(NULL, '$nama', '$jurusan')");
        if($simpan){
            header("location: kelas.php");
        }else{
            echo "<script>alert('Data sudah ada');</script>";
        }
}
?>