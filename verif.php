<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_p = $_GET['id_p'];


// menghapus data dari database
mysqli_query($koneksi, "update tb_pembayaran set status='gagal' where id_pembayaran='$id_p'");

// mengalihkan halaman kembali ke index.php
header("location:data_pembayaran.php");
