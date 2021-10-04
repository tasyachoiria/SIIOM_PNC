<?php
include 't_sideadmin.php';
?>

<title>
    TAMBAH MAHASISWA
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container text-center p-5">
            <h1 class="text-center">TAMBAH MAHASISWA</h1>
            <form action="C_tambahmahasiswa.php" method="post">
                            <div class="form-row">
                            <label class="col-sm-2 col-form-label">Nim</label>
                                <div class="form-group col">
                                    <input type="number" class="form-control" placeholder="nim" name="nim" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="username" name="username" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                            <label class="col-sm-2 col-form-label">Password</label>
                                <div class="form-group col">
                                    <input type="password" class="form-control" placeholder="password" name="password" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="nama" name="nama" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="jenis kelamin" name="jenis_kelamin" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                            <label class="col-sm-2 col-form-label">Alamat </label>
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="alamat" name="alamat" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                            <label class="col-sm-2 col-form-label">No Hp</label>
                                <div class="form-group col">
                                    <input type="number" class="form-control" placeholder="no hp" name="no_hp" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                            <label class="col-sm-2 col-form-label">Prodi</label>
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="prodi" name="prodi" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                            <label class="col-sm-2 col-form-label">Jurusan</label>
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="jurusan" name="jurusan" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                            <label class="col-sm-2 col-form-label">Angkatan</label>
                                <div class="form-group col">
                                    <input type="number" class="form-control" placeholder="angkatan" name="angkatan" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                            <label class="col-sm-2 col-form-label">Level</label>
                                <div class="form-group col">
                                    <input type="number" class="form-control" placeholder="level" name="level" Required="">
                                </div>
                                </div>
                            <button type="submit" class=" btn btn-warning" name="button" id="button" value="Proses"><b>SAVE</b></button>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>