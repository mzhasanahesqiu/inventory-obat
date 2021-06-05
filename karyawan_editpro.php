<?php 
include "koneksi.php";

if (isset($_POST['update'])) {
$kd_petugas   = $_GET['kd_petugas'];
$nama 		  = $_POST['nama'];
$alamat		  = $_POST['alamat'];
$no_tlp 	  = $_POST['no_tlp'];
$posisi 	  = $_POST['posisi'];

$query = mysqli_query($koneksi, "UPDATE karyawan SET nama='$nama', alamat='$alamat', no_tlp='$no_tlp', posisi='$posisi' WHERE kd_petugas='$kd_petugas' ");

	if ($query) {
		header("Location: karyawan_tampil.php");
	} else{
		echo "Gagal Update";
	}
}
?>