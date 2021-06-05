<?php 
include "koneksi.php";

$no = $_GET['no'];

$query = mysqli_query($koneksi, "DELETE FROM laporan WHERE no='$no' ");

if ($query) {
	header("Location: laporan_tampil.php");
} else{
	echo "Gagal Menghapus";
}

?>