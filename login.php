<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Halaman Login</title>
  </head>
  <body>
  <style>
    	body{
    		background-color: lightgrey;
        background-image: url("farmasi.png");
    	}
    </style>
    <?php
    session_start();
    if(isset($_GET['pesan_error'])){
        $pesan_error = $_GET['pesan_error'];
    } else if (isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
    }
  
    ?>

    <!-- style navigasi bar atas-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand">APOTEK JOINT FARMA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>


      <div class="container">
        <div class="row mt-4">
          <div class="col-md-4 mx-auto">
            <br><br><br>
            <div class="card p-4 border-0 shadow-sm">
            <h2 class="text-center" style="font: maroon">Halaman Login</h2>
            <p class="text-center text-muted">Silahkan untuk login terlebih dahulu</p>
            
              <?php
              if(isset($pesan_error)){
                echo "<div class=\"alert alert-danger\">$pesan_error</div>";
              } else if(isset($pesan)){
                echo "<div class=\"alert alert-success\">$pesan</div>";
              }

              ?>
              <form action="proses-login.php" method="POST">
                <div class="mb-3" bg-color:#0dcaf0>
                  <label for="username" class="form-label">Username</label>
                  <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="mb-3">
                  <center><input type="submit" value="Login" class="btn btn-primary" name="login"></center>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  </body>
</html>