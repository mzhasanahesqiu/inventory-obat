<?php 
include "koneksi.php";

if (isset($_POST['tambah'])) {
	$kd_beli        = $_POST['kd_beli'];
	$kd_obat 		= $_POST['kd_obat'];
	$harga      	= $_POST['harga'];
	$tgl_beli    	= $_POST['tgl_beli'];

	$sql = "INSERT INTO pembelian(kd_beli, kd_obat, harga, tgl_beli) VALUES ('$kd_beli', '$kd_obat', '$harga', '$tgl_beli')";
	$query = mysqli_query($koneksi, $sql);

	if ($query) {
		header("Location: pembelian_tampil.php");
	} else{
		echo "Gagal";
	}
}
?>