<?php include 't_head.html'; ?>

<title>
    Profile
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
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    include 'koneksi.php';
                    $no = $_SESSION['id'];

                    $data = mysqli_query($koneksi, "select * from tb_karyawan where nip = $no");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <i class="fas fa-id-card fa-5x"></i>
                                </div>

                                <h3 class="profile-username text-center"><?php echo $d['nama'] ?></h3>

                                <p class="text-muted text-center"><?php echo $d['alamat'] ?></p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>NIP</b> <a class="float-right"><?php echo $d['nip'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>NO HP</b> <a class="float-right"><?php echo $d['no_hp'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>JABATAN</b> <a class="float-right"><?php echo $d['jabatan'] ?></a>
                                    </li>

                                </ul>


                                <a href="" type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal<?php echo $d['nip']; ?>"><b>Edit Profile</b></a>
                            </div>


                            <!-- Modal edit -->
                            <div class="modal fade" id="myModal<?php echo $d['nip'] ?>" tabindex="-1" aria-labelledby="editAkun<?= $akun['id_user'] ?>Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editAkun<?php echo $d['nip'] ?>Label">Edit Akun</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="edit_profile.php" method="post">

                                                <div class="form-group form-group-default">
                                                    <label>Username</label>
                                                    <input type="hidden" name="nip" value="<?php echo $d['nip'] ?>">
                                                    <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $d['username'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" value="<?php echo $d['nama'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Alamat</label>
                                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $d['alamat'] ?>" required>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>No HP</label>
                                                    <input type="text" class="form-control" placeholder="No Hp." name="nohp" value="<?php echo $d['no_hp'] ?>" required>
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
                        <?php } ?>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
</body>
<?php include 't_foot.html'; ?>