<?php 
include "koneksi.php";

$kd_obat = $_GET['kd_obat'];

$query = mysqli_query($koneksi, "DELETE FROM stok WHERE kd_obat='$kd_obat' ");

if ($query) {
	header("Location: obat_tampil.php");
} else{
	echo "Gagal Menghapus";
}
?>