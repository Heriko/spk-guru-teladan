
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
$no=$_GET['id_bobot'];
$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from bobot where id_bobot='$no'");
?>
<form action="aksi/subobot.php" method="post">
<table border="1" align="center">

<?php
while($row=mysqli_fetch_array($query)){
?>
<input type="hidden" name="id_bobot" value="<?php echo $no;?>"/>
<?php
		$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kriteria");
	//Buat tabel untuk menampilkan hasil
	while ($dt2 = mysqli_fetch_array($sql2)) {
	?>
		<tr>
		<td width="100">Kriteria</td>
		<td align='center'><?php echo $dt2['c1'];?></td>
		<td align='center'><?php echo $dt2['c2'];?></td>
		<td align='center'><?php echo $dt2['c3'];?></td>
		<td align='center'><?php echo $dt2['c4'];?></td>
		<td align='center'><?php echo $dt2['c5'];?></td>
		<td align='center'><?php echo $dt2['c6'];?></td>
		</tr>
		<?php } ?>
		<tr>
		<td>Bobot</td>
		<td align='center'><input type="text" name="a1" size="5" value="<?php echo $row['b1'];?>" /></td>
		<td align='center'><input type="text" name="a2" size="5" value="<?php echo $row['b2'];?>" /></td>
		<td align='center'><input type="text" name="a3" size="5" value="<?php echo $row['b3'];?>" /></td>
		<td align='center'><input type="text" name="a4" size="5" value="<?php echo $row['b4'];?>" /></td>
		<td align='center'><input type="text" name="a5" size="5" value="<?php echo $row['b5'];?>" /></td>
		<td align='center'><input type="text" name="a6" size="5" value="<?php echo $row['b6'];?>" /></td>
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
