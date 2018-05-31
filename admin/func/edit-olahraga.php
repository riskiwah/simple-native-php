<?php
	include("db.php");
	if (isset($_POST['submit'])) {
    $jenis_olahraga = $_POST['jenis_olahraga'];
    $bakar = $_POST['bakar'];
		mysqli_query($connect,"UPDATE olahraga SET jenis_olahraga = '$jenis_olahraga', bakar = '$bakar'
      WHERE jenis_olahraga = '$jenis_olahraga'");
	}
	header("Location: ../pages/list-olahraga.php");
?>
