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
$id_guru=$_GET['id_guru'];
$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from guru where id_guru ='$id_guru'");
?>
<form action="aksi/supdate_guru.php" method="post">
<table border="1" align="center">
<?php
while($row=mysqli_fetch_array($query)){
?>
<input type="hidden" name="id_guru" value="<?php echo $id_guru;?>"/>
<tr>
<td>NUPTK</td><td><input type="text" name="nuptk" value="<?php echo $row['nuptk'];?>" /></td>
</tr>
<tr>
<td>Nama</td><td><input type="text" name="a1" value="<?php echo $row['nama'];?>" /></td>
</tr>
<tr>
<td>Jenis Kelamin</td><td><input type="text" name="a2" value="<?php echo $row['gender'];?>" /></td>
</tr>
<tr>
<td>Alamat</td><td><textarea cols="20" rows="5" name="a3"><?php echo $row['alamat'];?></textarea></td>
</tr>
<tr>
<td><input type="submit" value="UPDATE" name="simpan" /></td>
</tr>
</table>
</form>
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