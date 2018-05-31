<?php
  include("db.php");

  //if(isset($_POST['submit'])){
    $makanan = $_POST['makanan'];
    $deskripsi = $_POST['deskripsi'];
    $kalori = $_POST['kalori'];

    mysqli_query($connect, "INSERT INTO makanan (makanan, deskripsi, kalori) VALUES ('$makanan', '$deskripsi', '$kalori')");
  //}
  header("Location: ../pages/list-makanan.php");

 ?>
