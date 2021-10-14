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
                                <th>SEMESTER</th>
                                <th>TAHUN AJARAN</th>
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
                                    <td><?php echo $d['semester']; ?></td>
                                    <td><?php echo $d['tahun_ajaran']; ?></td>
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
                                        <a href="hapusP.php?nim=<?php echo $d['nim']; ?>" class="fas fa-trash"></a>
                                        <a href="" type="button" class="fas fa-list" data-toggle="modal" data-target="#detailModal<?php echo $d['nim']; ?>"></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>



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
                                <form action="tambah_p.php" method="post">
                                    <div class="form-group form-group-default">
                                        <label>NIM</label>
                                        <input type="number" class="form-control" placeholder="Nim" name="nim" required>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Semester</label>
                                        <select style="width: 232px;" name="semester" class="form-control">
                                            <option value="1">Semester 1</option>
                                            <option value="2">Semester 2</option>
                                            <option value="3">Semester 3</option>
                                            <option value="4">Semester 4</option>
                                            <option value="5">Semester 5</option>
                                            <option value="6">Semester 6</option>
                                            <option value="7">Semester 7</option>
                                            <option value="8">Semester 8</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Tahun Ajaran</label>
                                        <input type="number" class="form-control" placeholder="Masukan Tahun Ajaran" name="ta" required>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Tanggal Bayar</label>
                                        <input type="date" class="form-control" placeholder="Masukan Nama" name="date" required>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Nominal</label>
                                        <input type="number" class="form-control" placeholder="Masukan nominal" name="nominal" required>
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

</body>
<?php include 't_foot.html'; ?>