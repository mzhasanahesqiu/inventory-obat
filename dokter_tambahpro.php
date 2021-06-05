<?php 
include "koneksi.php";

if (isset($_POST['tambah'])) {
	$kd_dokter = $_POST['kd_dokter'];
	$nama = $_POST['nama'];
	$spesialis = $_POST['spesialis'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];

	$sql = "INSERT INTO dokter(kd_dokter, nama, spesialis, alamat, no_tlp) VALUES ('$kd_dokter', '$nama', '$spesialis', '$alamat', '$no_tlp')";
	$query = mysqli_query($koneksi, $sql);

	if ($query) {
		header("Location: dokter_tampil.php");
	} else{
		echo "Gagal";
	}
}
?>