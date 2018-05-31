<?php
	include("db.php");
	$jenis_olahraga = $_GET['jenis_olahraga'];
	mysqli_query($connect,"DELETE  FROM olahraga WHERE jenis_olahraga = '$jenis_olahraga'");
	header("Location: ../pages/list-olahraga.php");
?>
