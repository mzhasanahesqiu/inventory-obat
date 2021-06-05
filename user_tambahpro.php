<?php 
include "koneksi.php";

if (isset($_POST['tambah'])) {
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$posisi = $_POST['posisi'];
    $kd_petugas = $_POST['kd_petugas'];

	$sql = "INSERT INTO akun(username, nama, posisi, kd_petugas) VALUES ('$username', '$nama', '$posisi', 'kd_petugas')";
	$query = mysqli_query($koneksi, $sql);

	if ($query) {
		header("Location: user_tampil.php");
	} else{
		echo "Gagal";
	}
}
?>