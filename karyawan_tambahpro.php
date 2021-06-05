<?php 
include "koneksi.php";

if (isset($_POST['tambah'])) {
	$kd_petugas = $_POST['kd_petugas'];
	$nama 		= $_POST['nama'];
	$alamat 	= $_POST['alamat'];
	$no_tlp 	= $_POST['no_tlp'];
	$posisi 	= $_POST['posisi'];

	$sql = "INSERT INTO karyawan(kd_petugas, nama, alamat, no_tlp, posisi) VALUES ('$kd_petugas', '$nama', '$alamat', '$no_tlp', '$posisi')";
	$query = mysqli_query($koneksi, $sql);

	if ($query) {
		header("Location: karyawan_tampil.php");
	} else{
		echo "Gagal";
	}
}
?>