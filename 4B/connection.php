<?php
  $host ="localhost";
  $user = "root";
  $pass = "";
  $db = "4b";

  $koneksi = mysqli_connect($host, $user, $pass, $db);

  if( !$koneksi ){
      die("Gagal terhubung dengan database: " . mysqli_connect_error());
  }

?>
?>
