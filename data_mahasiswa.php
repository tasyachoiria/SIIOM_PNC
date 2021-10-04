<?php include 't_head.html'; ?>

<title>
    Data Mahasiswa
</title>


<?php include 't_topbarku.php'; ?>
<?php include 't_sidebarku.html'; ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Mahasiswa</h1>
                    <br>
                    <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahMa">Tambah Data Mahasiswa</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIM</th>
                            <th>USERNAME</th>
                            <th>NAMA</th>
                            <th>JENIS KELAMIN</th>
                            <th>ALAMAT</th>
                            <th>NO HP</th>
                            <th>JURUSAN</th>
                            <th>PRODI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from tb_mahasiswa");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nim']; ?></td>
                                <td><?php echo $d['username']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['jenis_kelamin']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['no_hp']; ?></td>
                                <td><?php echo $d['jurusan']; ?></td>
                                <td><?php echo $d['prodi']; ?></td>


                                <td>
                                    <a href="" type="button" class="fas fa-edit" data-toggle="modal" data-target="#myModal<?php echo $d['nim']; ?>"></a>
                                    <a href="hapus.php?nim=<?php echo $d['nim']; ?>" class="fas fa-trash"></a>
                                    <a href="" type="button" class="fas fa-list" data-toggle="modal" data-target="#myDetail<?php echo $d['nim']; ?>"></a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>

                            <!-- Modal edit -->
                            <div class="modal fade" id="myModal<?php echo $d['nim'] ?>" tabindex="-1" aria-labelledby="editAkun<?= $akun['id_user'] ?>Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editAkun<?php echo $d['nim'] ?>Label">Edit Akun</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="edit_m.php" method="post">
                                                <div class="form-group form-group-default">
                                                    <label>Nim</label>
                                                    <input type="hidden" name="nim" value="<?php echo $d['nim'] ?>">
                                                    <input type="text" class="form-control" placeholder="Nim" name="nim" value="<?php echo $d['nim'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Username</label>
                                                    <input type="hidden" name="nim" value="<?php echo $d['nim'] ?>">
                                                    <input type="text" class="form-control" placeholder="Username" name="user" value="<?php echo $d['username'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" value="<?php echo $d['nama'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Jenis Kelamin</label>
                                                    <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenis kelamin" value="<?php echo $d['jenis_kelamin'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Alamat</label>
                                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $d['alamat'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>No HP</label>
                                                    <input type="text" class="form-control" placeholder="No Hp." name="nohp" value="<?php echo $d['no_hp'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Jurusan</label>
                                                    <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" value="<?php echo $d['jurusan'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Prodi</label>
                                                    <input type="text" class="form-control" placeholder="Prodi" name="prodi" value="<?php echo $d['prodi'] ?>" required>
                                                </div>
                                                <div class="row">
                                                    <!-- <div class="col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>Level</label>
                                                                <select class="form-control" name="level" required>
                                                                    <?php foreach ($level as $lvl) { ?>
                                                                        <?php if ($akun['level_id'] == $lvl['id_level']) { ?>
                                                                            <option value="<?= $lvl['id_level'] ?>" selected><?= $lvl['level'] ?></option>
                                                                        <?php } else { ?>
                                                                            <option value="<?= $lvl['id_level'] ?>"><?= $lvl['level'] ?></option>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal detail -->
                            <div class="modal fade" id="myDetail<?php echo $d['nim'] ?>" tabindex="-1" aria-labelledby="editAkun<?= $akun['id_user'] ?>Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editAkun<?php echo $d['nim'] ?>Label">Edit Akun</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="edit_m.php" method="post">
                                                <div class="form-group form-group-default">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control" placeholder="Password" name="prodi" value="<?php echo $d['password'] ?>" required>
                                                </div>
                                                <div class="row">
                                                    <!-- <div class="col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>Level</label>
                                                                <select class="form-control" name="level" required>
                                                                    <?php foreach ($level as $lvl) { ?>
                                                                        <?php if ($akun['level_id'] == $lvl['id_level']) { ?>
                                                                            <option value="<?= $lvl['id_level'] ?>" selected><?= $lvl['level'] ?></option>
                                                                        <?php } else { ?>
                                                                            <option value="<?= $lvl['id_level'] ?>"><?= $lvl['level'] ?></option>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                    <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                    }
                        ?>
                        </tfoot>
                </table>
            </div>

            <!-- Modal tambah akun -->
            <div class="modal fade" id="tambahMa" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Akun</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="tambah_m.php" method="post">
                                <div class="form-group form-group-default">
                                    <label>NIM</label>
                                    <input type="number" class="form-control" placeholder="Nim" name="nim" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenis_kelamin" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>No Hp</label>
                                    <input type="text" class="form-control" placeholder="No Hp." name="no_hp" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Jurusan</label>
                                    <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Prodi</label>
                                    <input type="text" class="form-control" placeholder="Prodi" name="prodi" required>
                                </div>

                                <div class="row">
                                    <!-- <div class="col-md-4">
                                                            <div class="form-group form-group-default">
                                                                <label>Level</label>
                                                                <select class="form-control" name="level" required>
                                                                    <?php foreach ($level as $lvl) { ?>
                                                                        <?php if ($akun['level_id'] == $lvl['id_level']) { ?>
                                                                            <option value="<?= $lvl['id_level'] ?>" selected><?= $lvl['level'] ?></option>
                                                                        <?php } else { ?>
                                                                            <option value="<?= $lvl['id_level'] ?>"><?= $lvl['level'] ?></option>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div> -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.card-body -->
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<?php if (isset($_GET['pesan'])) { ?>
    <div class="container card bg-danger text-center text-light">
        <label><?php echo $_GET['pesan']; ?></label>
    </div>
<?php
} ?>
<?php include 't_foot.html'; ?>