<?php 
include "koneksi.php";

if (isset($_POST['update'])) {
$kd_beli      = $_GET['kd_beli'];
$kd_obat 	  = $_POST['kd_obat'];
$harga		  = $_POST['harga'];
$tgl_beli 	  = $_POST['tgl_beli'];

$query = mysqli_query($koneksi, "UPDATE pembelian SET kd_obat='$kd_obat', harga='$harga', tgl_beli='$tgl_beli' WHERE kd_beli='$kd_beli' ");

	if ($query) {
		header("Location: pembelian_tampil.php");
	} else{
		echo "Gagal Update";
	}
}
?>