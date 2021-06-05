<?php
include "koneksi.php";
$tipe_file = $_FILES['file']['type'];
if ($tipe_file == "application/pdf")
{
    $nama = trim($_POST['nama']);
    $bulan = trim($_POST['bulan']);
    $eksistensi = trim($_POST['eksistensi']);
    $file = trim($_FILES['file']['name']);

    $sql = "INSERT INTO laporan (nama, bulan, eksistensi) VALUES ('$nama', '$bulan', '$eksistensi')";
    mysqli_query($koneksi,$sql);

    $query = mysqli_query($koneksi,"SELECT no FROM laporan ORDER BY no DESC LIMIT 1");
    $data  = mysqli_fetch_array($query);

    $nama_baru = "file_".$data['no'].".pdf";
    $file_temp = $_FILES['file']['tmp_name'];
    $folder    = "./upload/";

    move_uploaded_file($file_temp, $folder.$nama_baru);
    mysqli_query($koneksi,"UPDATE laporan SET file='$nama_baru' WHERE no='$data[no]'");

    header('location:laporan_tampil.php');

} else
{
    echo "Gagal Upload File Bukan PDF! <a href='laporan_tampil.php'> Kembali </a>";
}
?>