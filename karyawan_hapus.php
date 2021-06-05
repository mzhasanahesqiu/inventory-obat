<?php 
include "koneksi.php";

$kd_petugas = $_GET['kd_petugas'];

$query = mysqli_query($koneksi, "DELETE FROM karyawan WHERE kd_petugas='$kd_petugas' ");

if ($query) {
	header("Location: karyawan_tampil.php");
} else{
	echo "Gagal Menghapus";
}

?>