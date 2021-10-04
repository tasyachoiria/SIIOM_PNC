<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$semester = $_POST['semester'];
$ta = $_POST['ta'];
$date = $_POST['date'];
$nominal = $_POST['nominal'];

// menginput data ke database
mysqli_query($koneksi, "insert into tb_pembayaran (nim,semester,tahun_ajaran,tanggal_bayar,nominal) values ('$nim','$semester','$ta','$date','$nominal')");

// mengalihkan halaman kembali ke index.php
header("location:data_pembayaran.php");
