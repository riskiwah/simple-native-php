<?php
  include("../func/db.php");
  $query = mysqli_query($connect,"SELECT * FROM makanan");
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
      <table style="border:1px solid black;">
      <tr>
        <th width="3%">No</th>
        <th width="5%">Makanan</th>
        <th width="15%">Deskripsi</th>
        <th width="15%">Kalori</th>
      </tr>
      <?php
        $i = 1;
        while ($doc = mysqli_fetch_array($query)) { ?>
        <tr><center>
          <td><?php echo $i; ?></td>
          <td><?php echo $doc['makanan']; ?></td>
          <td><?php echo $doc['deskripsi']; ?></td>
          <td><?php echo $doc['kalori']; ?></td>
        </tr></center>
       <?php $i++;
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
