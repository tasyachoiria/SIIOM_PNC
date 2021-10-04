<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jurusan = $_POST['jurusan'];
$prodi = $_POST['prodi'];

// menginput data ke database
mysqli_query($koneksi, "insert into tb_mahasiswa (nim,username,nama,jenis_kelamin,alamat,no_hp,jurusan,prodi) values ('$nim','$username','$nama','$jenis_kelamin','$alamat','$no_hp','$jurusan','$prodi')");

// mengalihkan halaman kembali ke index.php
header("location:data_mahasiswa.php");
