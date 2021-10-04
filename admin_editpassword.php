<?php
include 't_sideadmin.php';

$nip=$_GET['nip'];
$result= mysqli_query($koneksi, "SELECT * FROM tb_baak where nip='$nip'");

$nip=$_POST['nip'];
$id_data_pembayaran_iom=$_POST['id_data_pembayaran_iom'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jabatan = $_POST['jabatan'];
$level = $_POST['level'];
?>

<title>
    Edit Password
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container p-3">
            <h3 class="text-center p-4">Edit Password</h3>
            <form action="c_adminedit.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="number" class="form-control" value="<?= $nip; ?>" placeholder="Nip" name="nip" Required>
                                </div>  
                                <div class="form-group col-md-4">
                                    <input type="number" class="form-control" value="<?= $id_data_pembayaran_iom; ?>" placeholder="Id Data Pembayaran IOM" name="id_data_pembayaran_iom" Required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?= $username; ?>" placeholder="Username" name="username" Required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="password" class="form-control" value="<?= $password; ?>" placeholder="Password" name="password" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="<?= $nama; ?>" placeholder="Nama" name="nama" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="<?= $alamat; ?>" placeholder="Alamat" name="alamat" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <select type="number" class="form-control" value="<?= $no_hp; ?>" placeholder="No Hp" name="no_hp" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <select type="text" class="form-control" value="<?= $jabatan; ?>" placeholder="Jabatan" name="jabatan" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <select type="number" class="form-control" value="<?= $level; ?>" placeholder="Level" name="level" Required="">
                                </div>
                            </div>
                            </div>
                            <br><button type="submit" class=" btn btn-success" name="button" id="button" value="Proses"><b>Simpan</b></button>
                            <a class="btn btn-danger" href="admin_page.php">Batal</a>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>