<?php 
session_start();
$_SESSION['username'] == "";

unset($_SESSION['username']);


session_unset();
session_destroy();

$pesan = "Anda berhasil logout";
$pesan = urlencode($pesan);

header("Location:login.php?pesan={$pesan}");
?>