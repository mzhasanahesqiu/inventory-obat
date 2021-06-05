<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <style>
    	body{
    		background-color: lightgrey;
        background-image: url("farmasi.png");
    	}
    </style>

</head> 
<body>
<?php
    session_start();
    if(isset($_SESSION['posisi']) == "") {
      header("Location:login.php");
    } 
?>

	<!-- style navigasi bar atas-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container">
        <a class="navbar-brand" href="#">APOTEK JOINT FARMA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="data_tampil.php">DATA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="laporan_tampil.php">LAPORAN</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-xl mt-4 p-5  bg-light">
          <h1 align="left mb-2">DATA</h1><hr>
	        <p>Berikut dibawah ini merupakan kategori data Apotek Joint Farma</p>
          <h4><a href="index.php" class="btn btn-dark">Kembali</a></h4>

          <!-- // fungsi untuk memanggil jumlah data dalam database -->
          <?php
          include "koneksi.php";
          $jumus = mysqli_query($koneksi, "SELECT * FROM akun");
          $jumkar = mysqli_query($koneksi, "SELECT * FROM karyawan");
          $jumob = mysqli_query($koneksi, "SELECT * FROM stok");
          $jumbeli = mysqli_query($koneksi, "SELECT * FROM pembelian");
          $jumlok = mysqli_query($koneksi, "SELECT * FROM lokasi");
          $jumdok = mysqli_query($koneksi, "SELECT * FROM dokter");
          $jumsup = mysqli_query($koneksi, "SELECT * FROM supplier");
          $jumpel = mysqli_query($koneksi, "SELECT * FROM pelanggan");

          $jumlah_user  =  mysqli_num_rows($jumus);
          $jumlah_karyawan =  mysqli_num_rows($jumkar);
          $jumlah_obat  =  mysqli_num_rows($jumob);
          $jumlah_pembelian  =  mysqli_num_rows($jumbeli);
          $jumlah_lokasi =  mysqli_num_rows($jumlok);
          $jumlah_dokter  =  mysqli_num_rows($jumdok);
          $jumlah_supplier  =  mysqli_num_rows($jumsup);
          $jumlah_pelanggan =  mysqli_num_rows($jumpel);
          ?>

          <!-- fungsi untuk menampilkan jumlah data dengan menggunakan card -->
          <div class="row row-cols-1 row-cols-md-4 g-3 text-white">
          <div class="col">
              <div class="card">
                <div class="card-body bg-warning">
                  <center><h5 class="card-title">Data Stok Obat</h5><hr></center>
                  <p class="card-text"><h1 class="text-center"><?= $jumlah_obat ?></h1></p>
                  <center><a href="obat_tampil.php"><p class="card-text text-white"><u>Lihat Data</u></p></a></center>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body bg-secondary">
                  <center><h5 class="card-title">Data Lokasi Obat</h5><hr></center>
                  <p class="card-text"><h1 class="text-center"><?= $jumlah_lokasi ?></h1></p>
                  <center><a href="lokasi_tampil.php"><p class="card-text text-white"><u>Lihat Data</u></p></a></center>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body bg-info">
                  <center><h5 class="card-title">Data Pembelian</h5><hr></center>
                  <p class="card-text"><h1 class="text-center"><?= $jumlah_pembelian ?></h1></p>
                  <center><a href="pembelian_tampil.php"><p class="card-text text-white"><u>Lihat Data</u></p></a></center>
                </div>
              </div>
            </div>
            <?php 
            if($_SESSION['posisi'] == "admin" || $_SESSION['posisi'] == "kepala"){
            ?>
            <div class="col">
              <div class="card">
                <div class="card-body bg-dark">
                  <center><h5 class="card-title">Data User</h5><hr></center>
                  <p class="card-text"><h1 class="text-center"><?= $jumlah_user ?></h1></p>
                  <center><a href="user_tampil.php"><p class="card-text text-white"><u>Lihat Data</u></p></a></center>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body bg-primary">
                  <center><h5 class="card-title">Data Karyawan</h5><hr></center>
                  <p class="card-text"><h1 class="text-center"><?= $jumlah_karyawan ?></h1></p>
                  <center><a href="karyawan_tampil.php"><p class="card-text text-white"><u>Lihat Data</u></p></a></center>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body bg-success">
                  <center><h5 class="card-title">Data Supplier</h5><hr></center>
                  <p class="card-text"><h1 class="text-center"><?= $jumlah_supplier ?></h1></p>
                  <center><a href="supplier_tampil.php"><p class="card-text text-white"><u>Lihat Data</u></p></a></center>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body bg-danger">
                <center><h5 class="card-title">Data Dokter</h5><hr></center>
                  <p class="card-text"><h1 class="text-center"><?= $jumlah_dokter ?></h1></p>
                  <center><a href="dokter_tampil.php"><p class="card-text text-white"><u>Lihat Data</u></p></a></center>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body bg-secondary">
                  <center><h5 class="card-title">Data Pelanggan</h5><hr></center>
                  <p class="card-text"><h1 class="text-center"><?= $jumlah_pelanggan ?></h1></p>
                  <center><a href="pelanggan_tampil.php"><p class="card-text text-white"><u>Lihat Data</u></p></a><center>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


</body>
</html>