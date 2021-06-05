<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      background-color: lightgrey;
      background-image: url("farmasi.png");
    }
  </style>
</head>

<body>
  <?php
  error_reporting(0);
  session_start();
  if (isset($_GET['pesan_error'])) {
    $pesan_error = $_GET['pesan_error'];
  } else if (isset($_GET['pesan'])) {
    $pesan = $_GET['pesan'];
  }
  ?>

  <!-- style navigasi bar atas-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">APOTEK JOINT FARMA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
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
  <br><br>
  <div class="container-xl mt-4 p-5  bg-light">
    <h1 align="left mb-2">DATA STOK OBAT</h1>
    <hr>
    <p>Berikut dibawah ini merupakan data stok obat</p>
    <?php
    if ($_SESSION['posisi'] == "admin" || $_SESSION['posisi'] == "gudang") {
    ?>
      <h4>
        <a href="obat_tambah.php" class="btn btn-info">Tambah Stok Obat</a>
        <a href="data_tampil.php" class="btn btn-dark">Kembali</a>
      </h4>
    <?php
    } else if ($_SESSION['posisi'] == "kepala") {
    ?>
      <h4>
        <a href="data_tampil.php" class="btn btn-dark">Kembali</a>
      </h4>
    <?php
    }
    ?>
    <form class="right-area" action="" method="POST">
      <input type="text" name="keyword" placeholder="Cari data" autocomplete="off">
      <input type="submit" name="cari" value="Search">
    </form>
    <br>
    <!-- fungsi untuk menampilkan tabel yang berisi data dalam database-->
    <div class="table-responsive text-center">
      <table class="table table-striped table-bordered table-hover align-middle">

        <head>
          <tr class="table-success">
            <th>Kode Obat</th>
            <th>Nama Obat</th>
            <th>Stok</th>
            <th>Kedaluwarsa</th>
            <th>Aksi</th>
          </tr>
        </head>
        <tbody>

          <!-- fungsi untuk memanggil data dalam database -->
          <?php
          include("koneksi.php");
          $no = 0;
          $keyword = $_POST['keyword'];
          if ($keyword != '') {
            $data = mysqli_query($koneksi, "SELECT * FROM stok WHERE nama_obat LIKE '%" . $keyword . "%' OR kd_obat LIKE '%" . $keyword . "%'");
          } else {
            $data = mysqli_query($koneksi, "SELECT * FROM stok");
          }

          while ($baris = mysqli_fetch_array($data)) {
            $no++;
          ?>

            <tr>
              <td><?= $baris['kd_obat'] ?></td>
              <td><?= $baris['nama_obat'] ?></td>
              <td><?= $baris['stok'] ?></td>
              <td><?= $baris['kadaluarsa'] ?></td>
              <?php
              if ($_SESSION['posisi'] == "admin" || $_SESSION['posisi'] == "gudang") {
              ?>
                <td>
                  <a href="obat_detail.php?kd_obat=<?= $baris['kd_obat']; ?>" class="btn btn-primary">Detail</a>
                  <a href="obat_edit.php?kd_obat=<?= $baris['kd_obat']; ?>" class="btn btn-warning">Edit</a>
                  <a href="obat_hapus.php?kd_obat=<?= $baris['kd_obat']; ?>" class="btn btn-danger">Hapus</a>
                </td>
              <?php
              } else if ($_SESSION['posisi'] == "kepala") {
              ?>
                <td>
                  <a href="obat_detail.php?kd_obat=<?= $baris['kd_obat']; ?>" class="btn btn-primary">Detail</a>
                </td>
              <?php
              }
              ?>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>