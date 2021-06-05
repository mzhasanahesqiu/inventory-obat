<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<style>
        body{
            background-color: black; 
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
    <?php
    include "koneksi.php";
    $no    = mysqli_real_escape_string($koneksi,$_GET['no']);
    $query = mysqli_query($koneksi,"SELECT * FROM laporan WHERE no='$no'");
    $data  = mysqli_fetch_array($query);
    ?>
    <br>
    <p class="text-center" style="color: white;"><b>Judul Laporan:</b> <?= $data['nama'];?> </p>
    <embed src="upload/<?= $data['file'];?>" type="application/pdf" width="100%" height="600" >
</body>
</html>