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
                                    <a href="hapusMahasiswa.php?nim=<?php echo $d['nim']; ?>" class="fas fa-trash"></a>
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
                                            <form action="edit_mahasiswa.php" method="post">
                                                <div class="form-group form-group-default">
                                                    <label>Nim</label>
                                                    <input type="hidden" name="nim" value="<?php echo $d['nim'] ?>">
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Nim" name="nim" value="<?php echo $d['nim'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Username</label>
                                                    <input type="hidden" name="nim" value="<?php echo $d['nim'] ?>">
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Username" name="username" value="<?php echo $d['username'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Nama</label>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Masukan Nama" name="nama" value="<?php echo $d['nama'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                        <label>Jenis Kelamin</label>
                                                            <select style="width: 350px;" name="jenis_kelamin" class="float-right">
                                                                <option>Laki-laki</option>
                                                                <option>Perempuan</option>
                                                            </select>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Alamat</label>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Alamat" name="alamat" value="<?php echo $d['alamat'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>No HP</label>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="No Hp." name="no_hp" value="<?php echo $d['no_hp'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                        <label>Jurusan</label>
                                                            <select style="width: 350px;" name="jurusan" class="float-right">
                                                                <option>Jurusan Teknik Elektronika</option>
                                                                <option>Jurusan Teknik Informatika</option>
                                                                <option>Jurusan Teknik Mesin</option>
                                                                <option>Program Studi Teknik Pengendalian Pencemaran Lingkungan</option>
                                                                <option>Program Studi Teknik Pengembangan Produk Agroindustri</option>
                                                            </select>
                                                </div>
                                                <div class="form-group form-group-default">
                                                        <label>Prodi</label>
                                                            <select style="width: 350px;" name="prodi" class="float-right">
                                                                <option>D3 - Teknik Elektronika</option>
                                                                <option>D3 - Teknik Listrik</option>
                                                                <option>D3 - Teknik Informatika</option>
                                                                <option>D3 - Teknik Mesin</option>
                                                                <option>D4 - Teknik Pengendalian Pencemaran Lingkungan</option>
                                                                <option>D4 - Teknik Pengembangan Produk Agroindustri</option>
                                                            </select>
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
                                            <h5 class="modal-title" id="editAkun<?php echo $d['nim'] ?>Label">Detail Akun</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <h3 class="profile-username text-center"><?php echo $d['nama'] ?></h3>
                                            <form action="edit_mahasiswa.php" method="post">
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <input type="hidden" name="nim" value="<?php echo $d['nim'] ?>">
                                                    <b>Nim</b>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Nim" name="nim" value="<?php echo $d['nim'] ?>" required>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Username</b>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Username" name="username" value="<?php echo $d['username'] ?>" required>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Password</b>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Username" name="username" value="<?php echo $d['username'] ?>" required>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Nama</b>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Nama" name="nama" value="<?php echo $d['nama'] ?>" required>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Jenis Kelamin</b>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin'] ?>" required>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Alamat</b>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Alamat" name="alamat" value="<?php echo $d['alamat'] ?>" required>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>No HP</b>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="No Hp." name="no_hp" value="<?php echo $d['no_hp'] ?>" required>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Jurusan</b>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Jurusan" name="jurusan" value="<?php echo $d['jurusan'] ?>" required>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Prodi</b>
                                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Prodi" name="prodi" value="<?php echo $d['prodi'] ?>" required>
                                                </li>
                                            </ul>
                                                
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

            <!-- Modal Tambah Akun -->
            <div class="modal fade" id="tambahMa" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Akun</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="tambah_mahasiswa.php" method="post">
                                <div class="form-group form-group-default">
                                    <label>NIM</label>
                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Nim" name="nim" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Username</label>
                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Username" name="username" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Password</label>
                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Nama</label>
                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Masukan Nama" name="nama" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Jenis Kelamin</label>
                                    <select style="width: 350px;" name="jenis_kelamin" class="float-right">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Alamat</label>
                                    <input style="width: 350px;" type="text" class="float-right" placeholder="Alamat" name="alamat" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>No Hp</label>
                                    <input style="width: 350px;" type="text" class="float-right" placeholder="No Hp." name="no_hp" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Jurusan</label>
                                    <select style="width: 350px;" name="jurusan" class="float-right">
                                        <option>Jurusan Teknik Elektronika</option>
                                        <option>Jurusan Teknik Informatika</option>
                                        <option>Jurusan Teknik Mesin</option>
                                        <option>Program Studi Teknik Pengendalian Pencemaran Lingkungan</option>
                                        <option>Program Studi Teknik Pengembangan Produk Agroindustri</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Prodi</label>
                                    <select style="width: 350px;" name="prodi" class="float-right">
                                        <option>D3 - Teknik Elektronika</option>
                                        <option>D3 - Teknik Listrik</option>
                                        <option>D3 - Teknik Informatika</option>
                                        <option>D3 - Teknik Mesin</option>
                                        <option>D4 - Teknik Pengendalian Pencemaran Lingkungan</option>
                                        <option>D4 - Teknik Pengembangan Produk Agroindustri</option>
                                    </select>
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