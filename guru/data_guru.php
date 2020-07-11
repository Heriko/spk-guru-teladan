<?php
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{

   if ($_SESSION['level'] == "admin")
   {
echo
"<script language='javascript'>
alert('Konten untuk user');
document.location='../admin/home.php';
</script>";
   }
   else if ($_SESSION['level'] == "user")
   {
?>

<html>
<head>
<title>Pemilihan Guru Teladan</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>
</head>
<body>
<div id="container">

<?php include "header.php"; ?>

<div class="conten">
<?php
include "koneksi.php";

$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM guru");
	//Buat tabel untuk menampilkan hasil
	echo "<center><H3>Data Guru</H3></center>
	<table border='1' align='center'>
		<tr>
			<th width='50'>No</th>
			<th width='160'>NUPTK</th>
			<th width='180'>NAMA</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>

		</tr>
		";
		$no = 1;
	while ($dt = mysqli_fetch_array($sql)) {
	?>
		<tr>
			<td  align='center' ><?php echo $no;?></td>
			<td><?php echo $dt['nuptk'];?></td>
			<td><?php echo $dt['nama'];?></td>
			<td ><?php echo $dt['gender'];?></td>
			<td><?php echo $dt['alamat'];?></td>

		</tr>
	<?php
	$no++;
	}
	echo "</table>";
	echo "<br>";
	?>
	<br><br>
</div>

<?php include "footer.php"; ?>

</div>
<br><br>
</body>
</html>

<?php
}
}
else
{
	?><script language="javascript">
	alert("Silahkan login terlebih dahulu");
	document.location="../login.php";
	</script>
	<?php
}
?>