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

	echo "<center><H3>Kriteria dan Bobot</H3></center>
	<table border='1' align='center' cellspacing='6' cellpadding='4'>
	";
$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kriteria");
	//Buat tabel untuk menampilkan hasil
	while ($dt2 = mysqli_fetch_array($sql2)) {
	?>
		<tr>
		<td width="100"><b>Kriteria</b></td>
		<td align='center'><?php echo $dt2['c1'];?></td>
		<td align='center'><?php echo $dt2['c2'];?></td>
		<td align='center'><?php echo $dt2['c3'];?></td>
		<td align='center'><?php echo $dt2['c4'];?></td>
		<td align='center'><?php echo $dt2['c5'];?></td>
		<td align='center'><?php echo $dt2['c6'];?></td>
		<td align='center'><a href="ukriteria.php?id_kriteria=<?php echo $dt2['id_kriteria']; ?>">Edit</a></td>
		</tr>
		<?php } ?>
<?php


$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM bobot");
	//Buat tabel untuk menampilkan hasil
	while ($dt = mysqli_fetch_array($sql)) {
	?>
		<tr>
			<td><b>Bobot</b></td>
			<td align='center'><?php echo $dt['b1'];?></td>
			<td align='center'><?php echo $dt['b2'];?></td>
			<td align='center'><?php echo $dt['b3'];?></td>
			<td align='center'><?php echo $dt['b4'];?></td>
			<td align='center'><?php echo $dt['b5'];?></td>
			<td align='center'><?php echo $dt['b6'];?></td>
			<td align='center' width='80'><a href="ubobot.php?id_bobot=<?php echo $dt['id_bobot']; ?>">Edit</a>
		</tr>
	<?php
	}
	echo "</table>";
	echo "<br>";
	?>
	
<table border="1">
<tr><th width="120">Kategori Bobot</th><th width="60">Nilai</th></tr>
<tr><td>Sangat Penting</td><td align="center">9</td></tr>
<tr><td>Penting</td><td align="center">7</td></tr>
<tr><td>Cukup</td><td align="center">5</td></tr>
<tr><td>Kurang</td><td align="center">4</td></tr>
<tr><td>Sangat Kurang</td><td align="center">2</td></tr>
</table>
	
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