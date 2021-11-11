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
mysqli_query($koneksi, "insert into tb_karyawan (nip,username,nama,alamat,no_hp,jabatan,level) values ('$nip','$username','$nama','$alamat','$no_hp','$jabatan','$level')");

// mengalihkan halaman kembali ke index.php
header("location:data_karyawan.php");
