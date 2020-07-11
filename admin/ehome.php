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

$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from data where id='1'");
while($ds=mysqli_fetch_array($query)){
?>
	
	<form method="POST" action="aksi/ehome-proses.php">
				<table width="100%"  border="1" align="center" cellpadding="5" cellspacing="0">
								<tr>
									<td>
										<textarea id='isi' name='isi' cols="100">
										<?php echo $ds['isi'];?>
										</textarea>
									</td>
								</tr>
								
				</td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<input type="submit" name="kirim" value="UPDATE" />
				</td>
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