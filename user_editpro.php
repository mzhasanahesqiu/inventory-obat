<?php 
include "koneksi.php";

if (isset($_POST['update'])) {
$username  = $_GET['username'];
$nama = $_POST['nama'];
$kd_petugas = $_POST['kd_petugas'];
$posisi = $_POST['posisi'];

$query = mysqli_query($koneksi, "UPDATE akun SET nama='$nama', kd_petugas='$kd_petugas', posisi='$posisi' WHERE username='$username' ");

	if ($query) {
		header("Location: user_tampil.php");
	} else{
		echo "Gagal Update";
	} 

}
?>