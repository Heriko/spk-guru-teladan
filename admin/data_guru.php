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
			<th>Aksi</th>

		</tr>
		";
	while ($dt = mysqli_fetch_array($sql)) {
	?>
		<tr>
			<td  align='center' ><?php echo $dt['id_guru'];?></td>
			<td><?php echo $dt['nuptk'];?></td>
			<td><?php echo $dt['nama'];?></td>
			<td ><?php echo $dt['gender'];?></td>
			<td><?php echo $dt['alamat'];?></td>
			<td align='center' width='80'><a href="edit_guru.php?id_guru=<?php echo $dt['id_guru']; ?>">Edit</a><br>
			<a href="aksi/dguru.php?id_guru=<?php echo $dt['id_guru']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>
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