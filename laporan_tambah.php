<!DOCTYPE html>
<html>
<head>
    <title>TAMBAH LAPORAN</title> 
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
        <form action="laporan_tambahpro.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Judul Laporan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control mt-1 mb-1" name="nama" id="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control mt-1 mb-1" name="bulan" id="bulan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eksistensi" class="col-sm-2 col-form-label">Eksistensi</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control mt-1 mb-1" name="eksistensi" id="eksistensi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label">Pilih file</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control mt-1 mb-1" name="file" id="file">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-primary mt-3"></input>
                    </div>
                </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body> 
</html>