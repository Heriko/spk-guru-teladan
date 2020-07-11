<?php
// memulai session
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "admin")
   {   
   	header('location:admin/home.php');
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "user")
   {
       header('location:guru/index.php');
   }
}
if (!isset($_SESSION['level']))
{
	header('location:../loginskripsi/index.php');
}

 ?>