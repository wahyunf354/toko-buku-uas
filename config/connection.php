<?php
$server = "localhost";
$user = "wahyu";
$pass = "wahyu";
$db = "db_toko_buku_uas";

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
  die("error connection " . mysqli_connect_error());
}
