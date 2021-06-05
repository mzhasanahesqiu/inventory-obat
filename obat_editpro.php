<?php 
include "koneksi.php";

if (isset($_POST['update'])) {
$kd_obat       = $_GET['kd_obat'];
$nama_obat     = $_POST['nama_obat'];
$stok		   = $_POST['stok'];
$kadaluarsa    = $_POST['kadaluarsa'];

$query = mysqli_query($koneksi, "UPDATE stok SET nama_obat='$nama_obat', stok='$stok', kadaluarsa='$kadaluarsa' WHERE kd_obat='$kd_obat' ");

	if ($query) {
		header("Location: obat_tampil.php");
	} else{
		echo "Gagal Update";
	}
}
?>