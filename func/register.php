<?php
include '../func/db.php';

if (@$_POST['submit']) {

  $nama = @$_POST['nama'];
  $email = @$_POST['email'];
  $password = @$_POST['password'];
  $alamat = @$_POST['alamat'];
  $dob = @$_POST['dob'];

  // $password = md5($passwordold);

  mysqli_query($connect, "INSERT INTO user(nama,email,password,alamat,dob) VALUES ('$nama','$email', '$password', '$alamat', '$dob')");

?>

<script type="text/javascript">
  alert("Register berhasil");
  window.location.href=".."

</script>

<?php  }
 ?>
