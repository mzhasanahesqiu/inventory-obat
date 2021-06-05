<?php 
include "koneksi.php";

if (isset($_POST['update'])) {
$kd_obat  = $_GET['kd_obat'];
$nama_obat = $_POST['nama_obat'];
$jenis_obat = $_POST['jenis_obat'];
$lokasi_obat = $_POST['lokasi_obat'];

$query = mysqli_query($koneksi, "UPDATE lokasi SET nama_obat='$nama_obat', jenis_obat='$jenis_obat', lokasi_obat='$lokasi_obat' WHERE kd_obat='$kd_obat' ");

	if ($query) {
		header("Location: lokasi_tampil.php");
	} else{
		echo "Gagal Update";
	} 

}
?>