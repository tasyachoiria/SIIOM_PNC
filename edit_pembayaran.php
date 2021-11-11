<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$tanggal_bayar = $_POST['tanggal_bayar'];
$nominal = $_POST['nominal'];

// menginput data ke database
mysqli_query($koneksi, "update tb_pembayaran set nama='$nama',prodi='$prodi',tangal_bayar='$tanggal_bayar',nominal='$nominal' where nim='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:data_pembayaran.php");