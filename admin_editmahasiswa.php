<?php
include 't_head.html';
include 'sidebar.html';

$nim = $_GET['nim'];
$result = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa where nim='$nim'");

$bio = mysqli_fetch_array($result);
$username = $bio['username'];
$password = $bio['password'];
$nama = $bio['nama'];
$jenis_kelamin = $bio['jenis_kelamin'];
$alamat = $bio['alamat'];
$no_hp = $bio['no_hp'];
$prodi = $bio['prodi'];
$jurusan = $bio['jurusan'];
$angkatan = $bio['angkatan'];
$level = $bio['level'];
?>

<title>
    EDIT MAHASISWA
</title>

<div class="main">
    <div class="jumbotron">
        <div class="row">
            <h1 class="pl-5 pb-3"><b>Edit Mahasiswa : <?= $nama ?></b></h1>
        </div>
        <div class="container row">
            <div class="col-md-6">
                <form action="c_admineditmahasiswa.php" method="post">

                    <div class="row">
                        <div class="col">
                            <p class="pl-5">Username
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $username; ?>" placeholder="Username" name="username" Required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="pl-5">Password
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" value="<?= $password; ?>" placeholder="Password" name="password" Required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="pl-5">Nama
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $nama; ?>" placeholder="Nama" name="nama" Required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="pl-5">Jenis Kelamin
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $jenis_kelamin; ?>" placeholder="Jenis Kelamin" name="jenis_kelamin" Required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="pl-5">Alamat
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $alamat; ?>" placeholder="Alamat" name="alamat" Required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="pl-5">No Hp
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" value="<?= $no_hp; ?>" placeholder="No Hp" name="no_hp" Required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="pl-5">Prodi
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $prodi; ?>" placeholder="Prodi" name="prodi" Required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="pl-5">Jurusan
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $jurusan; ?>" placeholder="Jurusan" name="jurusan" Required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="pl-5">Angkatan
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" value="<?= $angkatan; ?>" placeholder="Angkatan" name="angkatan" Required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="pl-5">Level
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" value="<?= $level; ?>" placeholder="Level" name="level" Required>
                        </div>
                    </div>

            </div>
            <div class="pl-5">
                <br>
                <input type="hidden" value="<?= $nim; ?>" name="nim">
                <a class="btn btn-primary" href="data_mahasiswa.php">Batal</a>
                <button type="submit" class=" btn btn-success" name="button" id="button" value="Proses"><b>Save</b></button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php
include 't_foot.html';
?>