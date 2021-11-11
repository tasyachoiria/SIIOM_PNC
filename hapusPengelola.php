<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$nip = $_GET['nip'];


// menghapus data dari database
mysqli_query($koneksi, "delete from tb_pengelola where nip='$nip'");

// mengalihkan halaman kembali ke index.php
header("location:data_pengelola.php");
