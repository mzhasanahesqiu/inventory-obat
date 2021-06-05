<?php 
include "koneksi.php";

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_hash = sha1($password);
	$pesan_error = "";

	if (empty($username)) {
		$pesan_error = "Username harus diisi"; 
	} else if (empty($password)) {
		$pesan_error = "Password harus diisi";
	}

	if ($pesan_error == "") {
		$query = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username' AND password='$password_hash' ");
		$data = mysqli_fetch_assoc($query);

			if (mysqli_num_rows($query) == 1) {
				if ($data['posisi'] == "admin") {
					session_start();
					$_SESSION['nama'] = $data['nama'];
					// $_SESSION['npm'] = $data['npm'];
					$_SESSION['posisi'] = $data['posisi'];

					header("Location: index.php");
				} else	if ($data['posisi'] == "kepala") {
					session_start();
					$_SESSION['nama'] = $data['nama'];
					// $_SESSION['npm'] = $data['npm'];
					$_SESSION['posisi'] = $data['posisi'];

					header("Location: index.php");
				} else	if ($data['posisi'] == "gudang") {
					session_start();
					$_SESSION['npm'] = $data['npm'];
					$_SESSION['nama'] = $data['nama'];	
					$_SESSION['posisi'] = $data['posisi'];

					header("Location: index.php");
				}
			}
	} else{
		header("Location: login.php?pesan_error={$pesan_error}");
	}

} else{
	$pesan_error = "";
}

?>