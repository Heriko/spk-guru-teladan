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
window.open('print.php','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=800,height=650,left=50,top=20,titlebar=yes')
}
</script>
</head>
<body>
<div id="container">


<?php include "header.php"; ?>


<div class="conten">
<?php
include "koneksi.php";

$sql = mysqli_query($GLOBALS["___mysqli_ston"], "select * from penilaian order by jumlah desc");
	//Buat tabel untuk menampilkan hasil
	echo "<center><H3>Data Hasil</H3></center>
	<table border='1' align='center'>
		<tr>
			<th width='50'>No</th>
			<th width='215'>Nama</th>
			<th width='70'>Nilai</th>

		</tr>
		";
		$no = 1;
	while ($dt = mysqli_fetch_array($sql)) {
	?>
		<tr color="if($no == 1){ red 
		else { }
		}" >
			<td align='center'><?php echo $no;?></td>
			<td ><?php echo $dt['nama'];?></td>
			<td align='center'><?php echo $dt['jumlah'];?></td>

		</tr>
	<?php
	$no++;
	}
	echo "</table>";
?>
<br>
<center><h3>Selamat Kepada Guru Yang Terpilih</h3></center>
<br>
<form>
<table align="center" cellpadding="6">
<?php
$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from penilaian order by jumlah desc limit 1");
while($row=mysqli_fetch_array($query)){
?>

<tr>
<td>NAMA GURU</td><td> : <?php echo $row['nama'];?></td>
</tr>
<tr>
<td>NILAI</td><td> : <?php echo $row['jumlah'];?></td>
</tr>
</table>
<?php
}
?>

<br>
<pre>
	<input type="button" value="Print hasil" onClick="popup_print()" />
</pre>
<br>
</div>


<?php include "footer.php"; ?>



</div>

<br><br><br><br>
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