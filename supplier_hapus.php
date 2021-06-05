<?php 
include "koneksi.php";
$kd_supplier = $_GET['kd_supplier'];

$query = mysqli_query($koneksi, "DELETE FROM supplier WHERE kd_supplier='$kd_supplier' ");

	if ($query) {
		header("Location: supplier_tampil.php");
	} else{
		echo "Gagal";
	}
?>