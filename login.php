<?php 
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$hasil = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");

	$cek = mysqli_num_rows($hasil);

	if ($cek == 1) {
		echo "Selamat Darang";
	} else {
		echo "Tolong masukkan password dengan benar";
	}
	
?>