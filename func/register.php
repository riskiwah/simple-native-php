<?php
include("db.php");

if (@$_POST['submit']) {

  $nama = @$_POST['nama'];
  $email = @$_POST['email'];
  $password = @$_POST['password'];
	$alamat = @$_POST['alamat'];
	$dob = @$_POST['dob'];

	for($i=0;$i<=$jumlah;$i++){
		if($jumlah == 0){
			$urut = 1;
		}
		if($i == $jumlah){
			$urut = $i+1;
		}
	};

  mysqli_query($connect, "INSERT INTO user(id,nama,email,password,alamat,dob) VALUES ('$urut', '$nama', '$email', '$password', '$alamat', '$dob')");

?>

<script type="text/javascript">
  alert("SIMPAN berhasil");
  window.location.href="../login.php"

</script>

<?php  }
 ?>
