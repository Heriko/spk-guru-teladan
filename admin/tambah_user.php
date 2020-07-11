<?php
// memulai session
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "admin")
   {   


?>

<html>
<head>
<title>ADMIN</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>
</head>
<body>
<div id="container">

<div class="header">
<?php include "header.php"; ?>
</div>

<div class="conten">

<form method="post" action="aksi/simpan_user.php">
<pre>
Nama		<input type="text" name="nama" required="required"/><br>
Password	<input type="text" name="pass" required="required"/><br>
Level		<input type="text" name="level" required="required"/><br>
</pre>
  <br />
    <input type="submit" name="submit" value="TAMBAH" /> <input type="reset" name="hapus" value="BATAL" />
</form>
</div>

<div class="footer">
<?php include "footer.php"; ?>
</div>


</div>


</body>
</html>


<?php
   }
   else if ($_SESSION['level'] == "user")
   {
       header('location:../guru/index.php');
   }
   else
{
	?><script language="javascript">
	alert("Halaman Admin, Silahkan LOGIN");
	document.location="../login.php";
	</script>
	<?php
}
}  
if (!isset($_SESSION['level']))
{
	header('location:../login.php');
}
?>