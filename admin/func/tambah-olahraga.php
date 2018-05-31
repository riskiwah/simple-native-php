<?php
  include("db.php");

  //if(isset($_POST['submit'])){
    $jenis_olahraga = $_POST['jenis_olahraga'];
    $bakar = $_POST['bakar'];

    mysqli_query($connect, "INSERT INTO olahraga (jenis_olahraga, bakar) VALUES ('".$jenis_olahraga."', '".$bakar."')");
  //}
  header("Location: ../pages/list-olahraga.php");

 ?>
