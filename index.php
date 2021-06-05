<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <title>Index</title>
  <style>
    body {
      background-color: lightgrey;
      background-image: url("farmasi.png");
    }
  </style>
</head>

<body>

  <?php
  session_start();
  if (isset($_SESSION['posisi']) == "") {
    header("Location:login.php");
  }
  ?>


  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">APOTEK JOINT FARMA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_tampil.php">DATA</a>
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
  <?php
  include "koneksi.php";
  $jumlap = mysqli_query($koneksi, "SELECT * FROM laporan");
  $jumlah_laporan  =  mysqli_num_rows($jumlap);
  ?>
  <div class="container mt-4 p-4 bg-light">
    <h1 align="left mb-2">HOME</h1>
    <hr>
    <div class="alert alert-success">
      <div class="row row-cols-1 row-cols-md-12 g-3 text-white">
        <div class="col-md-6 text-dark">
          <h4 class="alert-heading">Hallo, <?= $_SESSION['nama'] ?></h4>
          <p>Selamat datang di halaman <?= $_SESSION['posisi'] ?></p>
          <p>Silahkan untuk masuk ke halaman data atau laporan</p>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body bg-primary">
              <center>
                <h5 class="card-title">Jumlah Kategori Data</h5>
                <hr>
              </center>
              <?php
              if ($_SESSION['posisi'] == 'admin' || $_SESSION['posisi'] == 'kepala') { ?>
                <p class="card-text">
                <h1 class="text-center">8</h1>
                </p>
              <?php
              } else if ($_SESSION['posisi'] == 'gudang') { ?>
                <p class="card-text">
                <h1 class="text-center">3</h1>
                </p>
              <?php
              }
              ?>
              <center><a href="data_tampil.php">
                  <p class="card-text text-white"><u>Lihat Data</u></p>
                </a></center>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body bg-success">
              <center>
                <h5 class="card-title">Jumlah Laporan</h5>
                <hr>
              </center>
              <p class="card-text">
              <h1 class="text-center"><?= $jumlah_laporan ?></h1>
              </p>
              <center><a href="laporan_tampil.php">
                  <p class="card-text text-white"><u>Lihat Laporan</u></p>
                </a></center>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="container-xl mt-4 p-5  bg-light">
    <h1 align="left mb-2">DATA OBAT KESELURUHAN</h1>
    <hr>
    <p>Berikut dibawah ini merupakan data obat keseluruhan (inner join)</p>
    <div class="table-responsive text-center">
      <table class="table table-striped table-bordered table-hover align-middle">
        <tr>
          <th>Nama Obat</th>
          <th>Jenis Obat</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Kedaluwarsa</th>
          <th>Tanggal Beli</th>
        </tr>
        <?php
        include "koneksi.php";
        $query = mysqli_query($koneksi, "SELECT * FROM stok INNER JOIN lokasi ON stok.kd_obat = lokasi.kd_obat INNER JOIN pembelian ON pembelian.kd_obat = stok.kd_obat");
        while ($row = mysqli_fetch_array($query)) {
        ?>

          <tr>
            <td><?= $row['nama_obat']; ?></td>
            <td><?= $row['jenis_obat']; ?></td>
            <td><?= $row['stok']; ?></td>
            <td><?= $row['harga']; ?></td>
            <td><?= $row['kadaluarsa']; ?></td>
            <td><?= $row['tgl_beli']; ?></td>
          </tr>

        <?php } ?>

      </table>
    </div>
  </div>
  <br>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>