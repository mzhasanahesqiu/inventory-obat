<?php 
include "koneksi.php";

if (isset($_POST['tambah'])) {
	$kd_pelanggan = $_POST['kd_pelanggan'];
	$nama_obat = $_POST['nama_obat'];
	$kd_obat = $_POST['kd_obat'];

	$sql = "INSERT INTO pelanggan(kd_pelanggan, nama_obat, kd_obat) VALUES ('$kd_pelanggan', '$nama_obat', '$kd_obat')";
	$query = mysqli_query($koneksi, $sql);

	if ($query) {
		header("Location: pelanggan_tampil.php");
	} else{
		echo "Gagal";
	}
}
?>