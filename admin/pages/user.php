<?php
	include("../func/db.php");
	$query = mysqli_query($connect,"SELECT * FROM user");
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
        <a href="makanan.php">List Makanan</a>
        <a href="list-olahraga.php">List Olahraga</a>
      </div>
      <div class="column middle">
				<table style="border">
				<tr>
					<th width="3%">No</th>
					<th width="5%">nama</th>
					<th width="15%">email</th>
					<th width="20%">password</th>
					<th width="30%">alamat</th>
					<th width="5%">Aksi</th>
				</tr>
				<?php
					$i = 1;
					while ($doc = mysqli_fetch_array($query)) { ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $doc['nama']; ?></td>
						<td><?php echo $doc['email']; ?></td>
						<td><?php echo $doc['password']; ?></td>
						<td><?php echo $doc['alamat']; ?></td>
						<td>
							<a href="edit-data.php?nim=<?php echo $doc['nama'] ; ?>">Edit</a>
							<a href="hapus-data.php?nim=<?php echo $doc['nama'] ; ?> " >Hapus</a>
						</td>
					</tr>
				 <?php $i++;
				 } ?>
		</table>
    <div class="footer">
      <p>
        This is Footer
      </p>
    </div>
  </body>
</html>
