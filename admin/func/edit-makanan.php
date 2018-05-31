<?php
	include("db.php");
	if (isset($_POST['submit'])) {
    $makanan = $_POST['makanan'];
    $deskripsi = $_POST['deskripsi'];
    $kalori = $_POST['kalori'];
		mysqli_query($connect,"UPDATE makanan SET makanan = '$makanan', deskripsi = '$deskripsi'
      WHERE makanan = '$makanan'");
	}
	header("Location: ../pages/list-makanan.php");
?>
