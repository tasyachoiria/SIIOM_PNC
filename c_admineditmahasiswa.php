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

//(nim tidak perlu karena dibikin otomatis)
$query = "UPDATE tb_mahasiswa SET username='$username',password='$password',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',no_hp='$no_hp',prodi='$prodi',jurusan='$jurusan',angkatan='$angkatan',level='$level' WHERE nim='$nim'";

if (mysqli_query($koneksi,$query) == true) {
  echo "
          <script>
              alert('Data Berhasil Diupdate!');
              document.location.href = 'data_mahasiswa.php';
          </script>
      ";
} else {
  echo "
          <script>
              alert('Data Gagal Diupdate!');
              document.location.href = 'data_mahasiswa.php';
          </script>
      ";
}
?>