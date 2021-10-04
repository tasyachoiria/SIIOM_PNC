<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $nim = $_POST['nim'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $prodi = $_POST['prodi'];
  $jurusan = $_POST['jurusan'];
  $angkatan = $_POST['angkatan'];
  $level = $_POST['level'];
// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO tb_mahasiswa (`nim`,`username`,`password`,`nama`,`jenis_kelamin`,`agama`,`alamat`,`no_hp`,`prodi`,`jurusan`,`angkatan`,`level`) VALUES ('$nim','$username', '$password', '$nama','$jenis_kelamin','$agama','$alamat', '$no_hp', '$prodi','$jurusan','$angkatan','$level')";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='data_mahasiswa.php';</script>";
    }
  ?>