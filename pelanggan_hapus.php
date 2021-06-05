<?php 
include "koneksi.php";
$kd_pelanggan = $_GET['kd_pelanggan'];

$query = mysqli_query($koneksi, "DELETE FROM pelangan WHERE kd_pelanggan='$kd_pelanggan' ");

	if ($query) {
		header("Location: pelanggan_tampil.php");
	} else{
		echo "Gagal";
	}
?>