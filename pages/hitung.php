<?php
	include("../func/db.php");
	$query = mysqli_query($connect,"SELECT * FROM kesehatanmu ORDER BY id desc limit 1");
?>
<html>
 <head>
   <title>Dashboard</title>
   <link rel="stylesheet" type="text/css" href="../css/allin.css" />
 </head>
 <body>
 <div class="header">
   <a href="#default" class="header">The Dashboard</a>
   <div class="header-right">
     <a class="#about" href="../func/logout.php">Logout</a>
   </div>
 </div>
 <div class="row">
   <div class="column side">
     <a href="dashboard.php">Dashboard</a>
     <a href="hitung.php">Hitung Gula Darah</a>
       <a href="makanan.php">List Makanan</a>
       <a href="olahraga.php">List Olahraga</a>
   </div>
   <div class="column middle">
     <h2>Hitung</h2>
      <form action="../func/hitung.php" method="post">
        <b>Masukkan berat badan</b> <input type="number" name="berat_badan" /><br />
        <b>Masukkan tinggi badan</b> <input type="number" name="tinggi_badan" /><br />
        <b>Masukkan gula darah</b> <input type="number" name="gula_darah" /><br />
        <b>Masukkan tensi</b> <input type="number" name="tensi" /><br />
        <input class="submit" type="submit" value="Hitung!" name="submit"><br />
      </form>

     <table style="border">
     <tr>
       <th>ID</th>
       <th>STATUS</th>
     </tr>
     <?php

       while ($doc = mysqli_fetch_array($query)) { ?>
       <tr>

         <td><?php echo $doc['id']; ?></td>
         <td><?php
            if($doc['tensi'] <150 ) echo "TIDAK";
            else echo "DIABETES";
          ?></td>

       </tr>
      <?php
      } ?>
    </table>
   </div>
 </div>
 <div class="footer">
   <p>
     This is Footer
   </p>
 </div>
</body>
</html>
