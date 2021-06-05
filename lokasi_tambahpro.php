<?php 
include "koneksi.php";

if (isset($_POST['tambah'])) {
	$kd_obat = $_POST['kd_obat'];
	$nama_obat = $_POST['nama_obat'];
	$jenis_obat = $_POST['jenis_obat'];
    $lokasi_obat = $_POST['lokasi_obat'];

	$sql = "INSERT INTO lokasi(kd_obat, nama_obat, jenis_obat, lokasi_obat) VALUES ('$kd_obat', '$nama_obat', '$jenis_obat', '$lokasi_obat')";
	$query = mysqli_query($koneksi, $sql);

	if ($query) {
		header("Location: lokasi_tampil.php");
	} else{
		echo "Gagal";
	}
}
?>