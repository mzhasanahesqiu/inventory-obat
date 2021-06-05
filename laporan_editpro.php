<?php
include "koneksi.php";
$tipe_file = $_FILES['file']['type'];
if ($tipe_file == "application/pdf")
{
    $no = mysqli_real_escape_string($koneksi,$_GET['no']);
    $nama = trim($_POST['nama']);
    $bulan = trim($_POST['bulan']);
    $eksistensi = trim($_POST['eksistensi']);
    $file = trim($_FILES['file']['name']);
    $file_temp = $_FILES['file']['tmp_name'];
    $folder    = "./upload/";

    move_uploaded_file($file_temp, $folder.$file);

    $sql = "UPDATE laporan SET nama='$nama', bulan='$bulan', eksistensi='$eksistensi', file='$file' WHERE no='$no'";
    mysqli_query($koneksi,$sql);

    echo "<script>alert('Berhasil diupload'); location='laporan_tampil.php'</script>";

} else
{
    echo "<script>alert('Gagal diupload file bukan PDF'); location='laporan_tampil.php'</script>";
}
?>

