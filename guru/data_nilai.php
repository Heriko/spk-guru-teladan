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
<script type="text/javascript">
var s5_taf_parent = window.location;
function popup_print(){
window.open('nilai.php','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=800,height=650,left=50,top=20,titlebar=yes')
}
</script>
</head>
<body>
<div id="container">


<?php include "header.php"; ?>


<div class="conten">

<?php
include "koneksi.php";

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
		</tr>
		<?php } ?>
		
<?php

$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM penilaian");
	while ($dt = mysqli_fetch_array($sql)) {
	?>
		<tr>
			<td ><?php echo $dt['nama'];?></td>
			<td align='center'><?php echo $dt['c1'];?></td>
			<td align='center'><?php echo $dt['c2'];?></td>
			<td align='center'><?php echo $dt['c3'];?></td>
			<td align='center'><?php echo $dt['c4'];?></td>
			<td align='center'><?php echo $dt['c5'];?></td>
			<td align='center'><?php echo $dt['c6'];?></td>
		</tr>
	<?php
	}
	echo "</table>";
	echo "<br>";
	?>
<br>
<pre>
	<input type="button" value="Print Data Nilai" onClick="popup_print()" />
</pre>
<br>
	
</div>


<?php include "footer.php"; ?>
</div>
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