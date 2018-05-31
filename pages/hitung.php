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
		 <div class="my-input">
      <form action="../func/hitung.php" method="post">
        <label>Masukkan berat badan</label> <input type="number" name="berat_badan" /><hr />
        <label>Masukkan tinggi badan</label> <input type="number" name="tinggi_badan" /><hr />
        <label>Masukkan gula darah</label> <input type="number" name="gula_darah" /><hr />
        <label>Masukkan tensi</label> <input type="number" name="tensi" /><hr />
        <input class="submit" type="submit" value="Hitung!" name="submit"><hr />
      </form>
			</div>
     <table style="border">
     <tr>
       <th>STATUS</th>
     </tr>
     <?php

       while ($doc = mysqli_fetch_array($query)) { ?>
       <tr>

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
