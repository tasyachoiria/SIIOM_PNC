<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $nip=$_POST['nip'];
  $id_data_pembayaran_iom=$_POST['id_data_pembayaran_iom'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $alamat= $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $jabatan = $_POST['jabatan'];
  $level = $_POST['level'];

  

//(id tidak perlu karena dibikin otomatis)
$query = "UPDATE tb_baak SET nip='$nip',id_data_pembayaran_iom='$id_data_pembayaran_iom',username='$username',
password='$password',nama='$nama',alamat='$alamat',no_hp='$no_hp', jabatan='$jabatan',
level='$level'WHERE nip='$nip'";

if (mysqli_query($koneksi,$query) == true) {
  echo "
          <script>
              alert('Data Berhasil Diupdate!');
              document.location.href = 'admin_page.php';
          </script>
      ";
} else {
  echo "
          <script>
              alert('Data Gagal Diupdate!');
              document.location.href = 'admin_editpassword.php';
          </script>
      ";
}
?>