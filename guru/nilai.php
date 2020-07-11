<html>
<head>
<title>Pemilihan Guru Terbaik</title>
<link href="lap.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>
</head>
<body onLoad="window.print()">
<div class="lap">
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
<?php
include "../koneksi.php";
echo"<center><h3>Data Nilai</h3></center>
";

$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kriteria");
	//Buat tabel untuk menampilkan hasil
	while ($dt2 = mysqli_fetch_array($sql2)) {
	echo"
	Keterangan :<br>
	K1 = Kehadiran<br>
	K2 = Kemampuan Mengajar<br>
	K3 = Penguasaan Materi<br>
	K4 = tanggung Jawab<br>
	K5 = Perilaku<br>
	K6 = Prestasi
	";
	?>
	<br>
	<br>
	<table border='1' align='center'>
		<tr>
		<th width="170">Nama</th>
		<th align='center' width="60">K1</th>
		<th align='center' width="60">K2</th>
		<th align='center' width="60">K3</th>
		<th align='center' width="60">K4</th>
		<th align='center' width="60">K5</th>
		<th align='center' width="60">K6</th>
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
	?>
	
</div>
</body>
</html>