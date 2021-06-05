<?php 
include "koneksi.php";

$kd_beli = $_GET['kd_beli'];

$query = mysqli_query($koneksi, "DELETE FROM pembelian WHERE kd_beli='$kd_beli' ");

if ($query) {
	header("Location: pembelian_tampil.php");
} else{
	echo "Gagal Menghapus";
}
?>