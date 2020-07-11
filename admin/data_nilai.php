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

echo "<center><H3>DATA PENILAIAN</H3></center>
<table border='1' align='center'>
";
$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kriteria");
	//Buat tabel untuk menampilkan hasil
	while ($dt2 = mysqli_fetch_array($sql2)) {
	?>
		<tr>
		<th width="160">Nama</th>
		<th align='center'><?php echo $dt2['c1'];?></th>
		<th align='center' width="100"><?php echo $dt2['c2'];?></th>
		<th align='center' width="100"><?php echo $dt2['c3'];?></th>
		<th align='center' width="100"><?php echo $dt2['c4'];?></th>
		<th align='center'><?php echo $dt2['c5'];?></th>
		<th align='center'><?php echo $dt2['c6'];?></th>
		<th align='center'>Aksi</th>
		</tr>
		<?php } ?>
		
<?php
$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM penilaian order by nama asc");
	while ($dt = mysqli_fetch_array($sql)) {
	?>
		<tr>
			<td><?php echo $dt['nama'];?></td>
			<td align='center'><?php echo $dt['c1'];?></td>
			<td align='center'><?php echo $dt['c2'];?></td>
			<td align='center'><?php echo $dt['c3'];?></td>
			<td align='center'><?php echo $dt['c4'];?></td>
			<td align='center'><?php echo $dt['c5'];?></td>
			<td align='center'><?php echo $dt['c6'];?></td>
			<td align='center' width='80'><a href="edit_nilai.php?id_nilai=<?php echo $dt['id_nilai']; ?>">Edit</a><br>
			<a href="aksi/dnilai.php?id_nilai=<?php echo $dt['id_nilai']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
			</td>
		</tr>
	<?php
	}
	echo "</table>";
	echo "<br>";
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