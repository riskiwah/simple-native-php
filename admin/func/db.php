<?php

$host  = 'localhost';
$user  = 'root';
$pass = 'mendol';
$db    = 'pweb';

$connect = new mysqli($host, $user, $pass, $db);
if($connect->connect_error){
 echo 'Terjadi Kesalahan';
}

?>
