<?php 
include "koneksi.php";

if (isset($_POST['update'])) {
$kd_dokter  = $_GET['kd_dokter'];
$nama = $_POST['nama'];
$spesialis = $_POST['spesialis'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];

$query = mysqli_query($koneksi, "UPDATE dokter SET nama='$nama', spesialis='$spesialis', alamat='$alamat', no_tlp='$no_tlp' WHERE kd_dokter='$kd_dokter' ");

	if ($query) {
		header("Location: dokter_tampil.php");
	} else{
		echo "Gagal Update";
	} 

}
?>