<?php
	include("func/db.php");
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
          <a href="olahraga.php">List Olahraga</a>
      </div>
      <div class="column middle">
        <table id="daftar-mahasiswa">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Password</th>
							<th>Alamat</th>
							<th>Dob</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$i = 1;
							while ($pr = mysqli_fetch_array($query)) { ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $pr['nama']; ?></td>
										<td><?php echo $pr['email']; ?></td>
										<td><?php echo $pr['password']; ?></td>
										<td><?php echo $pr['alamat']; ?></td>
                    <td><?php echo $pr['dob']; ?></td>
										<td>
											<a href="edit.php?nim=<?php echo $pr['nama'] ; ?>">Edit</a>
											<a href="proses/proses_hapus_data.php?nim=<?php echo $pr['nim'] ; ?> " onclick="return klikHapus();" >Hapus</a>
										</td>
									</tr>
				 				<?php $i++;
				 			} ?>
					</tbody>
				</table>
    </div>
    <div class="footer">
      <p>
        This is Footer
      </p>
    </div>
  </body>
</html>
