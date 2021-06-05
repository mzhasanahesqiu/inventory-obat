<?php 
include "koneksi.php";
$username = $_GET['username'];

$query = mysqli_query($koneksi, "DELETE FROM akun WHERE username='$username' ");

	if ($query) {
		header("Location: user_tampil.php");
	} else{
		echo "Gagal";
	}
?>