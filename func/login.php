<?php
include("db.php");

$email = (htmlentities($_POST['email']));
$password = (htmlentities($_POST['password']));

$query    = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$runquery = $connect->query($query);

if($runquery->num_rows > 0){
 session_start();
 $_SESSION['mail'] = $email;
 header("Location:../pages/dashboard.php");
} else {
 echo '<h1>Email atau Kata Sandi Salah!</h1>';
}

?>
