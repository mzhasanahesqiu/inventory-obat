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
				<a class="nav-link" href="logout.php">Logout</a>
				</li>
				</ul>
			</div>
		</div>
	</nav>
	<br><br>
	<!-- fungsi  untuk mengedit data dan menampilkan data yang tersimpan -->
<div class="container-xl mt-4 p-5  bg-light">
    <h1 align="left mb-2">DETAIL DATA LOKASI OBAT</h1><hr>
    <p>Berikut dibawah ini merupakan detail data lokasi obat</p>
    <h4>
        <a href="lokasi_tampil.php" class="btn btn-dark">Kembali</a>
	</h4>
    <div class="table-responsive text-center">
        <table class="table table-striped table-bordered table-hover align-middle">
        <?php
        include "koneksi.php";
        $kd_obat = $_GET['kd_obat'];
        $query = mysqli_query($koneksi, "SELECT * FROM lokasi WHERE kd_obat='$kd_obat'");
            while($row=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td>Kode Obat</td>
            <td>:</td>
            <td><?= $row['kd_obat']; ?></td>
        </tr>
        <tr>
            <td>Nama Obat</td>
            <td>:</td>
            <td><?= $row['nama_obat']; ?></td>
        </tr>
        <tr>
            <td>Jenis Obat</td>
            <td>:</td>
            <td><?= $row['jenis_obat']; ?></td>
        </tr>
        <tr>
            <td>Lokasi Obat</td>
            <td>:</td>
            <td><?= $row['lokasi_obat']; ?></td>
        </tr>

        <?php } ?>

        </table>
    </div>
</div>
	


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>