<?php 
include "koneksi.php";

if (isset($_POST['update'])) {
$kd_pelanggan   = $_GET['kd_pelanggan'];
$nama_obat 		= $_POST['nama_obat'];
$kd_obat 		= $_POST['kd_obat'];

$query = mysqli_query($koneksi, "UPDATE pelangan SET nama_obat='$nama_obat', kd_obat='$kd_obat' WHERE kd_pelanggan='$kd_pelanggan' ");

	if ($query) {
		header("Location: pelanggan_tampil.php");
	} else{
		echo "Gagal Update";
	} 

}
?>