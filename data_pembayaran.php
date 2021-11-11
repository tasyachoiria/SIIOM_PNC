<?php include 't_head.html'; ?>

<title>
    Data Pembayaran
</title>

<?php include 't_topbarku.php'; ?>
<?php include 't_sidebarku.html'; ?>

<body style="background-image: url('background/resto.jpg');background-repeat: no-repeat;
  background-size: cover;">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pembayaran</h1>
                        <br>
                        <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPe">Tambah Data Pembayaran</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Pembayaran</li>
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
                    <h3 class="card-title">Data Pembayaran</h3>

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
                                <th>NAMA</th>
                                <th>PRODI</th>
                                <th>TANGGAL BAYAR</th>
                                <th>NOMINAL</th>
                                <th>STATUS VERIFIKASI</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from tb_pembayaran");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['nim']; ?></td>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['prodi']; ?></td>
                                    <td><?php echo $d['tanggal_bayar']; ?></td>
                                    <td>Rp. <?php echo number_format($d['nominal'], 0, ',', '.') ?></td>
                                    <td><?php if ($d['status'] == null) { ?>
                                            <a href="verify.php?id_p=<?php echo $d['id_pembayaran']; ?>" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                            <a href="verif.php?id_p=<?php echo $d['id_pembayaran']; ?>" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
                                        <?php } else {
                                            echo $d['status'];
                                        } ?>
                                    </td>
                                    <td>
                                        <a href="" type="button" class="fas fa-edit" data-toggle="modal" data-target="#myModal<?php echo $d['nim']; ?>"></a>
                                        <a href="hapusPembayaran.php?nim=<?php echo $d['nim']; ?>" class="fas fa-trash"></a>
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
                                                <h5 class="modal-title" id="editAkun<?php echo $d['nim'] ?>Label">Edit Pembayran</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="edit_pembayaran.php" method="post">
                                                    <div class="form-group form-group-default">
                                                        <label>Nim</label>
                                                        <input type="hidden" name="nim" value="<?php echo $d['nim'] ?>">
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Nim" name="nim" value="<?php echo $d['nim'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Nama</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Masukan Nama" name="nama" value="<?php echo $d['nama'] ?>" required>
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
                                                    <div class="form-group form-group-default">
                                                        <label>Tanggal Bayar</label>
                                                        <input style="width: 350px;" type="date" class="float-right" placeholder="Tanggal Bayar" name="date" value="<?php echo $d['tanggal_bayar'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Nominal</label>
                                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Masukan Nominal" name="nominal" value="<?php echo $d['nominal'] ?>" required>
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
                                                <h5 class="modal-title" id="editAkun<?php echo $d['nim'] ?>Label">Detail Pembayaran</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="profile-username text-center"><?php echo $d['nama'] ?></h3>
                                                <form action="edit_pembayaran.php" method="post">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <input type="hidden" name="nim" value="<?php echo $d['nim'] ?>">
                                                            <b>Nim</b>
                                                            <input style="width: 350px;" type="text" class="float-right" placeholder="Masukkan Nim" name="nim" value="<?php echo $d['nim'] ?>" required>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Nama</b>
                                                            <input style="width: 350px;" type="text" class="float-right" placeholder="Masukkan Nama" name="nama" value="<?php echo $d['nama'] ?>" required>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Prodi</b>
                                                            <input style="width: 350px;" type="text" class="float-right" placeholder="Prodi" name="prodi" value="<?php echo $d['prodi'] ?>" required>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Tanggal Bayar</b>
                                                            <input style="width: 350px;" type="date" class="float-right" placeholder="Tanggal Bayar" name="tanggal_bayar" value="<?php echo $d['tanggal_bayar'] ?>" required>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Nominal</b>
                                                            <input style="width: 350px;" type="text" class="float-right" placeholder="Nominal" name="nominal" value="<?php echo $d['nominal'] ?>" required>
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



                <!-- Modal tambah akun -->
                <div class="modal fade" id="tambahPe" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Pembayaran</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="tambah_pembayaran.php" method="post">
                                    <div class="form-group form-group-default">
                                        <label>NIM</label>
                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Nim" name="nim" required>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Nama</label>
                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Masukkan Nama" name="nama" required>
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
                                    <div class="form-group form-group-default">
                                        <label>Tanggal Bayar</label>
                                        <input style="width: 350px;" type="date" class="float-right" placeholder="Tanggal Bayar" name="date" required>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Nominal</label>
                                        <input style="width: 350px;" type="text" class="float-right" placeholder="Masukan Nominal" name="nominal" required>
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

</body>
<?php include 't_foot.html'; ?>