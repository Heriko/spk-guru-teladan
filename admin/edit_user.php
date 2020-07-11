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

<?php
include "../koneksi.php";
$id_user=$_GET['id_user'];
$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from user where id_user='$id_user'");
?>
<form action="aksi/supdate_user.php" method="post">
<table border="1" align="center">
<?php
while($row=mysqli_fetch_array($query)){
?>
<input type="hidden" name="id_user" value="<?php echo $id_user;?>"/>
<tr>
<th>Nama</th><th>Password</th><th>Level</th>
</tr>
<tr>
<td><input type="text" name="u1" value="<?php echo $row['nama'];?>" /></td>
<td><input type="text" name="u2" value="<?php echo $row['password'];?>" /></td>
<td><input type="text" name="u3" value="<?php echo $row['level'];?>" /></td>
</tr>
<tr>
<td><input type="submit" value="UPDATE" name="simpan" /></td>
</tr>
</table>
<?php
}
?>

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