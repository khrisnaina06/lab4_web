<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "lat1";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Gagal terkoneksi dengan database : " . mysqli_connect_error());
}
