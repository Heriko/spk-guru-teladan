
<html>
<head>
<title>Pemilihan Guru Terbaik</title>
<link href="lap.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>
</head>
<body onLoad="window.print()">
<?php include "../koneksi.php"; ?>

<div class="lap">
<form action="print.php" method="get">
	<?php
	$sql = mysqli_query($GLOBALS["___mysqli_ston"], "select * from penilaian order by jumlah desc");
	//Buat tabel untuk menampilkan hasil
	echo "
	<table align='center'>
	<tr>
	<td align='center'><font size='4'>YAYASAN PENDIDIKAN ISLAM NURUL FADHILAH (YADINA)</font><br>
	<font size='5'>SMA NURUL FALAAH</font><br>
	TERAKREDITASI 'B'<br>
	SK Ijin Pendirian: 421.3/156-Disdik     NSS: 302020211058     NPSN: 20252959<br>
	E-mail: sma_nurulfalaah@yahoo.co.id<br>
	</td>
	</tr>
	</table>
	<center>
	<hr>
	<font size='1,5'>Jl. Pahlawan No. 06 Kp. Bulaksaga RT. 03/06 Desa Cibadung Kec. Gunung sindur. Bogor 16340 Telp. (0251) 854226</font>
	<hr>
	</center>
	";
	
	
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
	<?php } ?>
</form>
</div>
</body>
</html>