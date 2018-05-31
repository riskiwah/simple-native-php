<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/allin.css" />
  </head>
  <body>
    <div class="header">
      <a href="#default" class="header">Health-Calc!</a>
      <div class="header-right">
        <a class="active" href="home">Home</a>
        <a class="#contact">Contact</a>
        <a class="#about">About</a>
      </div>
    </div>
    <div class="row1">
      <div class="column" style="background-color:#F4F4F4;">
        <h2>type here</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere turpis sem, et commodo leo dictum at. Integer tincidunt quam non elit porttitor, et tempor est mollis. Mauris et viverra nisl. Pellentesque nec ligula interdum, varius justo et, placerat dui. Donec metus nisi, porta in congue nec, volutpat sed lectus. Mauris in pharetra dui. Suspendisse elementum quam vel lorem sodales viverra vitae vel ex. Pellentesque ornare vel neque non eleifend.
        </p>
      </div>
      <div class="column" style="background-color:#F4F4F4;">
        <h2>Register</h2>
        <div class="login">
          <div class="form">
            <form action="func/register.php" method="post" style="border:1px solid #F4F4F4">
              <b>Nama</b> <input type="text" name="nama" placeholder="Nama" /><hr>
              <b>Email</b> <input type="email" name="email" placeholder="Email" /><hr />
              <b>Password</b> <input type="password" name="password" placeholder="Password" /><hr />
              <b>Confirm Password</b> <input type="password" name="password2" placeholder="Re Type Password" /><hr />
              <b>Alamat</b> <input type="text" name="alamat" placeholder="Alamat" /><hr />
              <b>Date Of Birth</b> <input type="datetime" name="dob" placeholder="Date of Birth" /><hr />
              <input class="submit" type="submit" value="Register" name="submit"><hr />
              <a href="pages/login.php">Sudah Register ?</a>
            </form>
          </div>
        </div>
    </div>
    <div class="footer">
      <p>
        This is Footer
      </p>
    </div>
  </body>
</html>
