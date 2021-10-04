<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$nim = $_GET['nip'];


// menghapus data dari database
mysqli_query($koneksi, "delete from tb_pembayaran where nim='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:data_pembayaran.php");
