<?php include 't_head.html'; ?>

<title>
    Data Pengelola
</title>




<body style="background-image: url('background/resto.jpg');background-repeat: no-repeat;
  background-size: cover;">
    <?php include 't_topbarku.php'; ?>
    <?php include 't_sidebarku.html'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pengelola</h1>
                        <br>
                        <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahMa">Tambah Data Pengelola</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Pengelola</li>
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
                    <h3 class="card-title">Data Pengelola</h3>

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
                                <th>NIP</th>
                                <th>USERNAME</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>NO HP</th>
                                <th>JABATAN</th>
                                <th>LEVEL</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from tb_pengelola");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['nip']; ?></td>
                                    <td><?php echo $d['username']; ?></td>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['alamat']; ?></td>
                                    <td><?php echo $d['no_hp']; ?></td>
                                    <td><?php echo $d['jabatan']; ?></td>
                                    <td><?php echo $d['level']; ?></td>


                                    <td>
                                        <a href="" type="button" class="fas fa-edit" data-toggle="modal" data-target="#myModal<?php echo $d['nip']; ?>"></a>
                                        <a href="hapusPengelola.php?nip=<?php echo $d['nip']; ?>" class="fas fa-trash"></a>
                                        <a href="" type="button" class="fas fa-list" data-toggle="modal" data-target="#myDetail<?php echo $d['nip']; ?>"></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>

                                <!-- Modal edit -->
                                <div class="modal fade" id="myModal<?php echo $d['nip'] ?>" tabindex="-1" aria-labelledby="editAkun<?= $akun['id_user'] ?>Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editAkun<?php echo $d['nip'] ?>Label">Edit Akun</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="edit_pengelola.php" method="post">
                                                    <div class="form-group form-group-default">
                                                        <label>Nip</label>
                                                        <input type="hidden" name="nip" value="<?php echo $d['nip'] ?>">
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Nip" name="nip" value="<?php echo $d['nip'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Username</label>
                                                        <input type="hidden" name="nip" value="<?php echo $d['nip'] ?>">
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Username" name="username" value="<?php echo $d['username'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Nama</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Masukan Nama" name="nama" value="<?php echo $d['nama'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Alamat</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Alamat" name="alamat" value="<?php echo $d['alamat'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>No HP</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="No Hp." name="nohp" value="<?php echo $d['no_hp'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Jabatan</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Jabatan" name="jabatan" value="<?php echo $d['jabatan'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Level</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Level" name="level" value="<?php echo $d['level'] ?>" required>
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
                                    <div class="modal fade" id="myDetail<?php echo $d['nip'] ?>" tabindex="-1" aria-labelledby="editAkun<?= $akun['id_user'] ?>Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editAkun<?php echo $d['nip'] ?>Label">Detail Akun</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="profile-username text-center"><?php echo $d['nama'] ?></h3>
                                                <form action="edit_mahasiswa.php" method="post">
                                                    <div class="form-group form-group-default">
                                                        <label>Nip</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="nip" name="nim" value="<?php echo $d['nip'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Username</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="username" name="username" value="<?php echo $d['username'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Password</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Password" name="password" value="<?php echo $d['password'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Nama</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Nama" name="nama" value="<?php echo $d['nama'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Alamat</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Alamat" name="alamat" value="<?php echo $d['alamat'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>No HP</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="No HP" name="nohp" value="<?php echo $d['no_hp'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Jabatan</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Jabatan" name="jabatan" value="<?php echo $d['jabatan'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Level</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Level" name="level" value="<?php echo $d['level'] ?>" required>
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
                                <form action="tambah_pengelola.php" method="post">
                                    <div class="form-group form-group-default">
                                        <label>NIP</label>
                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Nip" name="nip" required>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Username</label>
                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Username" name="username" required>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Nama</label>
                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Masukan Nama" name="nama" required>
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
                                        <label>Jabatan</label>
                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Jabatan" name="jabatan" required>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Level</label>
                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Level" name="level" required>
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

</body>
<?php include 't_foot.html'; ?>