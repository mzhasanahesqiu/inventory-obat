<?php 
include "koneksi.php";

if (isset($_POST['update'])) {
$kd_supplier  = $_GET['kd_supplier'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];

$query = mysqli_query($koneksi, "UPDATE supplier SET nama='$nama', alamat='$alamat', no_tlp='$no_tlp' WHERE kd_supplier='$kd_supplier' ");

	if ($query) {
		header("Location:supplier_tampil.php");
	} else{
		echo "Gagal Update";
	} 

}
?>