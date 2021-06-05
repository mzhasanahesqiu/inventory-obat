<?php 
include "koneksi.php";

if (isset($_POST['tambah'])) {
	$kd_supplier = $_POST['kd_supplier'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];

	$sql = "INSERT INTO supplier(kd_supplier, nama, alamat, no_tlp) VALUES ('$kd_supplier', '$nama', '$alamat', '$no_tlp')";
	$query = mysqli_query($koneksi, $sql);

	if ($query) {
		header("Location: supplier_tampil.php");
	} else{
		echo "Gagal";
	}
}
?>