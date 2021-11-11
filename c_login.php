<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if ($level == 1) {
	$result = mysqli_query($koneksi, "SELECT * FROM tb_pengelola where username='$username' and password='$password'");
	$cek = mysqli_num_rows($result);

	$bio = mysqli_fetch_array($result);
	$nip = $bio["nip"];
	$nama = $bio["nama"];
	if ($cek > 0) {
		$data = mysqli_fetch_assoc($result);
		//menyimpan session user, nama, status dan id 
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['nama'] = $nama;
		$_SESSION['id'] = $nip;
		$_SESSION['status'] = "sudah_login";
		header("location:profile.php");
	} else {
		header("location:login.php?pesan=Login gagal, data tidak ditemukan.");
	}
} elseif ($level == 2) {
	$result = mysqli_query($koneksi, "SELECT * FROM tb_baak where username='$username' and password='$password'");
	$cek = mysqli_num_rows($result);

	if ($cek > 0) {
		$data = mysqli_fetch_assoc($result);
		//menyimpan session user, nama, status dan id 
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = $level;
		$_SESSION['status'] = "sudah_login";
		header("location:baak_page.php");
	} else {
		header("location:login.php?pesan=Login gagal, data tidak ditemukan.");
	}
} elseif ($level == 3) {
	$result = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa where username='$username' and password='$password'");
	$cek = mysqli_num_rows($result);
	$bio = mysqli_fetch_array($result);
	$nim = $bio["nim"];
	$nama = $bio["nama"];

	if ($cek > 0) {
		$data = mysqli_fetch_assoc($result);
		//menyimpan session user, nama, status dan id 
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $pass;
		$_SESSION['id'] = $nim;
		$_SESSION['nama'] = $nama;
		$_SESSION['level'] = $level;
		$_SESSION['status'] = "sudah_login";
		header("location:profile_m.php");
	} else {
		header("location:login.php?pesan=Login gagal, data tidak ditemukan.");
	}
} else {
	$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa where username_stand='$username' and password_stand='$pass'");
	$cek = mysqli_num_rows($result);

	if ($cek > 0) {
		$data = mysqli_fetch_assoc($result);
		//menyimpan session user, nama, status dan id 
		$_SESSION['username_stand'] = $username;
		$_SESSION['password_stand'] = $pass;
		$_SESSION['id_stand'] = $id_stand;
		$_SESSION['status'] = "sudah_login";
		header("location:login.php");
	} else {
		header("location:login.php?pesan=Login gagal, data tidak ditemukan.");
	}
} 
 


// // menyeleksi data user dengan username dan password yang sesuai
// $result = mysqli_query($koneksi,"SELECT * FROM mhs where mhs_nim='$mhs_nim' and mhs_password='$mhs_password'");
// $cek = mysqli_num_rows($result);
