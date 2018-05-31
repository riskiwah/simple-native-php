<?php
	include("../func/db.php");
	$query = mysqli_query($connect,"SELECT * FROM olahraga");
?>
<html>
  <head>
    <title>Welcome Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/allin.css" />
  </head>
  <body>
    <div class="header">
      <a href="#default" class="header">Welcome !</a>
      <div class="header-right">
        <a class="active" href="home">Home</a>
        <a class="#cari">Cari</a>
        <a class="#logout" href="../func/logout.php">Logout</a>
      </div>
    </div>
    <div class="row">
      <div class="column side">
        <a href="dashboard.php">Dashboard Admin</a>
        <a href="user.php">User</a>
          <a href="list-makanan.php">List Makanan</a>
          <a href="list-olahraga.php">List Olahraga</a>
      </div>
      <div class="column middle">
        <a href="tambah-olahraga.php">Tambah Data</a>
        <table style="border:1px solid black;">
				<tr>
					<th width="1%">No</th>
					<th width="3%">Jenis Olahraga</th>
					<th width="15%">Kalori yang dbakar</th>
					<th width="5%">Aksi</th>
				</tr>
				<?php
					$i = 1;
					while ($doc = mysqli_fetch_array($query)) { ?>
					<tr><center>
						<td><?php echo $i; ?></td>
						<td><?php echo $doc['jenis_olahraga']; ?></td>
						<td><?php echo $doc['bakar']; ?></td>
						<td>
							<a href="edit-olahraga.php?jenis_olahraga=<?php echo $doc['jenis_olahraga'] ; ?>">Edit</a>
							<a href="../func/del-olahraga.php?jenis_olahraga=<?php echo $doc['jenis_olahraga'] ; ?> " >Hapus</a>
						</td>
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
