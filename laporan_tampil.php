<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN</title>
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
    if(isset($_GET['pesan_error'])){
        $pesan_error = $_GET['pesan_error'];
    } else if (isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
    }
    ?>

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
                <a class="nav-link" href="data_tampil.php">DATA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="laporan_tampil.php">LAPORAN</a>
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
	    <h1 align="left mb-2">LAPORAN</h1><hr>
	    <p>Berikut dibawah ini merupakan data laporan Apotek Joint Farma</p>
		<?php 
            if($_SESSION['posisi'] == "admin"){
        ?>
		<h4>
			<a href="laporan_tambah.php" class="btn btn-info">Tambah Laporan</a>
            <a href="index.php" class="btn btn-dark">Kembali</a>
		</h4>

		<!-- fungsi untuk menampilkan tabel yang berisi data dalam database-->
		<div class="table-responsive text-center">
		<table class="table table-striped table-bordered table-hover align-middle">
			<head>
				<tr class="table-success">
					<th>No.</th>
                    <th>Judul Laporan</th>
					<th>Bulan</th>
					<th>Eksistensi</th>
					<th>Aksi</th>
				</tr>
			</head>
			<tbody>

				<!-- fungsi untuk memanggil data dalam database -->
				<?php
				include("koneksi.php");
				$no = 0;
				$data = mysqli_query($koneksi, "SELECT * FROM laporan");
				while($baris=mysqli_fetch_array($data)){
				$no++;
				?>
				<tr>
					<td><?=$baris['no']?></td>
					<td><?=$baris['nama']?></td>	
					<td><?= $baris['bulan']?></td>
                    <td><?= $baris['eksistensi']?></td>
					<td>
						<!-- fungsi untuk menambah opsi hapus atau edit berdasarkan data yang dituju -->
						<a href="laporan_view.php?no=<?= $baris['no']; ?>" class="btn btn-primary">Lihat File</a>
						<a href="laporan_edit.php?no=<?= $baris['no']; ?>" class="btn btn-warning">Edit</a>
						<a href="laporan_hapus.php?no=<?= $baris['no']; ?>" class="btn btn-danger">Hapus</a> 
					</td>
				<?php
				}
				?>
			</tbody>
						
		</table>			
		</div>
		<?php } ?>
		<?php 
            if($_SESSION['posisi'] == "kepala"){
        ?>
		<h4>
            <a href="index.php" class="btn btn-dark">Kembali</a>
		</h4>

		<!-- fungsi untuk menampilkan tabel yang berisi data dalam database-->
		<div class="table-responsive text-center">
		<table class="table table-striped table-bordered table-hover align-middle">
			<head>
				<tr class="table-success">
					<th>No.</th>
                    <th>Judul Laporan</th>
					<th>Bulan</th>
					<th>Eksistensi</th>
					<th>Aksi</th>
				</tr>
			</head>
			<tbody>

				<!-- fungsi untuk memanggil data dalam database -->
				<?php
				include("koneksi.php");
				$no = 0;
				$data = mysqli_query($koneksi, "SELECT * FROM laporan");
				while($baris=mysqli_fetch_array($data)){
				$no++;
			
				?>
				<tr>
					<td><?=$baris['no']?></td>
					<td><?=$baris['nama']?></td>	
					<td><?= $baris['bulan']?></td>
                    <td><?= $baris['eksistensi']?></td>
					<td>
						<a href="laporan_view.php?no=<?= $baris['no']; ?>" class="btn btn-primary">Lihat File</a>
					</td>
				<?php
				}
				?>
			</tbody>
						
		</table>			
		</div>
		<?php } ?>
		<?php 
            if($_SESSION['posisi'] == "gudang"){
        ?>
		<h4>
            <a href="index.php" class="btn btn-dark">Kembali</a>
		</h4>

		<!-- fungsi untuk menampilkan tabel yang berisi data dalam database-->
		<div class="table-responsive text-center">
		<table class="table table-striped table-bordered table-hover align-middle">
			<head>
				<tr class="table-success">
					<th>No.</th>
                    <th>Judul Laporan</th>
					<th>Bulan</th>
					<th>Eksistensi</th>
					<th>Aksi</th>
				</tr>
			</head>
			<tbody>

				<!-- fungsi untuk memanggil data dalam database -->
				<?php
				include("koneksi.php");
				$no = 0;
				$data = mysqli_query($koneksi, "SELECT * FROM laporan");
				while($baris=mysqli_fetch_array($data)){
				$no++;
			
				?>
				<tr>
					<td><?=$baris['no']?></td>
					<td><?=$baris['nama']?></td>	
					<td><?= $baris['bulan']?></td>
                    <td><?= $baris['eksistensi']?></td>
					<td>
						<a href="laporan_view.php?no=<?= $baris['no']; ?>" class="btn btn-primary">Lihat File</a>
					</td>
				<?php
				}
				?>
			</tbody>
						
		</table>			
		</div>
		<?php } ?>     
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>