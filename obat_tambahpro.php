<?php 
include "koneksi.php";

if (isset($_POST['tambah'])) {
	$kd_obat = $_POST['kd_obat'];
	$nama_obat = $_POST['nama_obat'];
	$stok = $_POST['stok'];
	$kadaluarsa = $_POST['kadaluarsa'];

	$sql = "INSERT INTO stok(kd_obat, nama_obat, stok, kadaluarsa) VALUES ('$kd_obat', '$nama_obat', '$stok', '$kadaluarsa')";
	$query = mysqli_query($koneksi, $sql);

	if ($query) {
		header("Location: obat_tampil.php");
	} else{
		echo "Gagal";
	}
}
?>