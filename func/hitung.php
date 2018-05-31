<?php
  include("db.php");

  if(isset($_POST['submit'])){
  $berat_badan = $_POST['berat_badan'];
  $tinggi_badan = $_POST['tinggi_badan'];
  $gula_darah = $_POST['gula_darah'];
  $tensi = $_POST['tensi'];

  mysqli_query($connect,"INSERT INTO kesehatanmu (berat_badan, tinggi_badan, gula_darah, tensi) VALUES ('$berat_badan',
    '$tinggi_badan', '$gula_darah', '$tensi')");

}
header("Location: ../pages/hitung.php")
 ?>
