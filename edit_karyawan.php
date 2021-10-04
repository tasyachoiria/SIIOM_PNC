<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nip'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jurusan = $_POST['jabatan'];
$prodi = $_POST['level'];

// menginput data ke database
mysqli_query($koneksi, "update tb_karyawan set username='$username',nama='$nama',alamat='$alamat',no_hp='$no_hp',jabatan='$jabatan',level='$level' where nim='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:data_karyawan.php");