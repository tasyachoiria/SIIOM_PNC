<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $nip = $_POST['nip'];
  $id_data_pembayaran_iom=$_POST['id_data_pembayaran_iom'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $jabatan = $_POST['jabatan'];
  $level = $_POST['level'];
// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO tb_karyawan (`nip`,`id_data_pembayaran_iom`,`username`,`password`,`nama`,`alamat`,`no_hp`,`jabatan`,`level`) VALUES ('$nip','$username', '$password', '$nama','$alamat','$no_hp','$jabatan',`$level`)";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='data_karyawan.php';</script>";
    }
  ?>