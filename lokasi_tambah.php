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
<!-- style navigasi bar atas-->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
		<div class="container">
			<a class="navbar-brand" href="#">APOTEK</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link " href="index.php">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="data_tampil.php">DATA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="laporan_tampil.php">LAPORAN</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br><br>

	<div class="container-xl mt-4 p-5  bg-light">
	<h1 align="left mb-2">Menu Lokasi Obat</h1><hr>
		<h4>
			<a href="lokasi_tampil.php" class="btn btn-outline-info">Lihat Lokasi Obat</a>
		</h4>
		<h5>Tambah Lokasi Obat</h5>

			<!-- fungsi untuk menambah data melalui form -->
			<form action="lokasi_tambahpro.php" method="POST">
			<div class="form-group row">
			    <label for="kd_obat" class="col-sm-2 col-form-label">Kode Obat</label>
			    <div class="col-sm-10">
			    <input type="text" class="form-control mt-1 mb-1" name="kd_obat" id="kd_obat">
				</div>
			</div>
			<div class="form-group row">
			    <label for="nama_obat" class="col-sm-2 col-form-label">Nama Obat </label>
			    <div class="col-sm-10">
			    <input type="text" class="form-control mt-1 mb-1" name="nama_obat" id="nama_obat">
				</div>
			</div>
			<div class="form-group row">
			    <label for="jenis_obat" class="col-sm-2 col-form-label">Jenis Obat</label>
			    <div class="col-sm-10">
			    <input type="text" class="form-control mt-1 mb-1" name="jenis_obat" id="jenis_obat">
				</div>
			</div>
            <div class="form-group row">
			    <label for="lokasi_obat" class="col-sm-2 col-form-label">Lokasi Obat</label>
			    <div class="col-sm-10">
			    <input type="text" class="form-control mt-1 mb-1" name="lokasi_obat" id="lokasi_obat">
				</div>
			</div>
			<div class="form-group row justify-content-md-end">
				<div class="col-sm-10">
				    <button type="submit" name="tambah" id="tambah" class="btn btn-primary mt-3">Tambah</button>
				</div>
			</div>
			</form>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>