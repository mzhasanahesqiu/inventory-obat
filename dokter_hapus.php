<?php 
include "koneksi.php";
$kd_dokter = $_GET['kd_dokter'];

$query = mysqli_query($koneksi, "DELETE FROM dokter WHERE kd_dokter='$kd_dokter' ");

	if ($query) {
		header("Location: dokter_tampil.php");
	} else{
		echo "Gagal";
	}

?>