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

$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user");
	//Buat tabel untuk menampilkan hasil
	echo "<center><H3>Data Guru</H3></center>
	<table border='1' align='center'>
		<tr>
			<th align='center' width='30'> No </th>
			<th width='100'>NAMA</th>
			<th>Password</th>
			<th>Level</th>
			<th>Aksi</th>

		</tr>
		";
		$no = 1;
	while ($dt = mysqli_fetch_array($sql)) {
	?>
		<tr>
			<td align='center'><?php echo $no;?></td>
			<td><?php echo $dt['nama'];?></td>
			<td ><?php echo $dt['password'];?></td>
			<td><?php echo $dt['level'];?></td>
			<td align='center' width='80'><a href="edit_user.php?id_user=<?php echo $dt['id_user']; ?>">Edit</a><br>
			<a href="aksi/duser.php?id_user=<?php echo $dt['id_user']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>
		</tr>
	<?php
	$no++;
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