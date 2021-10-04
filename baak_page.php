<?php
include 't_sidebaak.php';

$username=$_SESSION['username'];
// $ceo_id=$_SESSION['ceo_id'];
// $nama=$_SESSION['ceo_nama'];
$result= mysqli_query($koneksi, "SELECT * FROM tb_baak where username='$username'");

$bio= mysqli_fetch_array($result);
$nama=$bio["nama"];
$username=$bio["username"];
// $id=$bio["id"];

// $hp=$bio["hp"];
?>

<title>
    Ganti Password
</title>

<div class="main">
    <div class="jumbotron" style="height: 10cm;">   

    <h2 class="pt-5 pl-5">Selamat Datang, <h1 class="pl-5"><b><?= $nama?></b></h1></h2><br><br>
     
        </div>
        <a class="btn btn-warning" href="admin_editpassword.php?">Ganti Password</a>
        </div>
        

<?php 
include 't_foot.html';
?>