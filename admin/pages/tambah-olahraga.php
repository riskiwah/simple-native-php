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
          <a href="tambah-makanan.php">List Makanan</a>
          <a href="list-olahraga.php">List Olahraga</a>
      </div>
      <div class="column middle">
        <form method="POST" action="../func/tambah-olahraga.php">
          <b>Jenis Olahraga</b> <input type="text" name="jenis_olahraga" /><br />
          <b>Kalori yang dibakar</b> <input type="number" name="bakar" /><br />
          <input type="button" name="submit" value="Submit"><br />
          <input type="reset" name="reset" value="Reset">
        </form>
      </div>
    </div>
    <div class="footer">
      <p>
        This is Footer
      </p>
    </div>
  </body>
</html>
