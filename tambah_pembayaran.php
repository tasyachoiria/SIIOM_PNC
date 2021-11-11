<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$date = $_POST['date'];
$nominal = $_POST['nominal'];

// menginput data ke database
mysqli_query($koneksi, "insert into tb_pembayaran (nim,nama,prodi,tanggal_bayar,nominal) values ('$nim','$nama','$prodi','$date','$nominal')");

// mengalihkan halaman kembali ke index.php
header("location:data_pembayaran.php");
