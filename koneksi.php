<?php
$host="localhost";
$user="root";
$password="";
$database="guru_teladan";
$koneksi=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $password));
mysqli_select_db($koneksi, $database);
?>