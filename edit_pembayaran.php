<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$semester = $_POST['semester'];
$tahun_ajaran = $_POST['tahun_ajaran'];
$tanggal_bayar = $_POST['tanggal_bayar'];
$nominal = $_POST['nominal'];

// menginput data ke database
mysqli_query($koneksi, "update tb_pembayaran set semsester='$semester',tahun_ajaran='$tahun_ajaran',tanggal_bayar='$tanggal_bayar',nominal='$nominal' where nim='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:data_pembayaran.php");