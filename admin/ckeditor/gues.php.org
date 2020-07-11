<?php
session_start();
if (isset($_SESSION['admin']))
{	
	?>

<html>
<head>
<title>ADMIN</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='img/icon.ico'></link>
</head>
<body>
<div id="container">

<div class="header">
<?php include "header.php"; ?>
</div>

<div class="conten">
<?php
include "../koneksi.php";

$sql = mysql_query("SELECT * FROM gues");
	//Buat tabel untuk menampilkan hasil
	echo "<center><H3>Data Tamu</H3></center>
	<table border='1' align='center'>
		<tr>
			<th>no</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>PESAN</th>
			<th>AKSI</th>

		</tr>
		";
	$no = 1;
	while ($dt = mysql_fetch_array($sql)) {
	?>
		<tr>
			<td align='center' width='50'><?php echo $no;?></td>
			<td width='120'><?php echo $dt['nama'];?></td>
			<td width='120'><?php echo $dt['email'];?></td>
			<td width='160'><?php echo $dt['pesan'];?></td>
			<td width='160'><a href="dgues.php?nomer=<?php echo $row['nomer']; ?>">Delet</a></td>
		</tr>
	<?php
	}
	echo "</table>";
	$no++;
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
else
{
	?><script language="javascript">
	alert("Tempat Terlarang... Silahkan LOGIN!!!!!");
	document.location="../login.php";
	</script>
	<?php
}
?>