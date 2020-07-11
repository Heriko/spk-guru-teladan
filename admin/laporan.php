
<html>
<head>
<title>Pemilihan Guru Teladan</title>
<link href="lap.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>
</head>
<body onLoad="window.print()">
<?php include "../koneksi.php"; ?>

<div class="lap">

<form action="print.php" method="get">

  <table width="100%" align='center'>
	<tr>
	<td width="8%"><img src="../img/icon.jpg" width="78" height="85" align="middle"></td>
	<td width="92%" align='center'><div align="left">
	  <p align="center"><font size='4'>YAYASAN PENDIDIKAN ISLAM NURUL FADHILAH (YADINA)</font><br>
              <font size='5'>SMA NURUL FALAAH</font><br>
	        TERAKREDITASI 'B'<br>
	        SK Ijin Pendirian: 421.3/156-Disdik     NSS: 302020211058     NPSN: 20252959<br>
	        E-mail: sma_nurulfalaah@yahoo.co.id<br>
	        </p>
	</div></td>
	</tr>
	</table>
	<center>
	<hr color="#000000">
	<font size='1,5'>Jl. Pahlawan No. 06 Kp. Bulaksaga RT. 03/06 Desa Cibadung Kec. Gunung sindur. Bogor 16340 Telp. (0251) 854226</font>
	<hr color="#000000">
	</center>
  <?php
	$sql = mysqli_query($GLOBALS["___mysqli_ston"], "select * from penilaian order by jumlah desc");
	//Buat tabel untuk menampilkan hasil
	echo "
	<br>
	<center>LAPORAN HASIL PEMILIHAN GURU TELADAN</CENTER>
	<font size='4'>
	<pre>
	Keterangan:
	C1  : Absensi
	C2  : Kemampuan Mengajar
	C3  : Penguasaan Materi
	C4  : Tanggung jawab
	C5  : Perilaku
	C6  : Prestasi
	</pre>
	</font>
	<table border='1' align='center'>
		<tr>
			<th width='50'>No</th>
			<th width='215'>Nama</th>
			<th width='50'>C1</th>
			<th width='50'>C2</th>
			<th width='50'>C3</th>
			<th width='50'>C4</th>
			<th width='50'>C5</th>
			<th width='50'>C6</th>
			<th width='70'>Nilai</th>

		</tr>
		";
		$no = 1;
	while ($dt = mysqli_fetch_array($sql)) {
	?>
  <tr>
			<td align='center'><?php echo $no;?></td>
			<td ><?php echo $dt['nama'];?></td>
			<td align='center'><?php echo $dt['c1'];?></td>
			<td align='center'><?php echo $dt['c2'];?></td>
			<td align='center'><?php echo $dt['c3'];?></td>
			<td align='center'><?php echo $dt['c4'];?></td>
			<td align='center'><?php echo $dt['c5'];?></td>
			<td align='center'><?php echo $dt['c6'];?></td>
			<td align='center'><?php echo $dt['jumlah'];?></td>

	</tr>
	<?php
	$no++;
	}
	echo "</table>";
	?>
	<center><h3>Selamat Kepada Guru Yang Terpilih</h3></center>
	<table align="center" cellpadding="6">
	<?php
	$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from penilaian order by jumlah desc limit 1");
	while($row=mysqli_fetch_array($query)){
	?>
	<tr><td>NAMA GURU</td><td> : <?php echo $row['nama'];?></td></tr>
	<tr><td>NILAI</td><td> : <?php echo $row['jumlah'];?></td></tr>
	</table>
	<p>
	  <?php } ?>
	</p>
  </form>
  
<table width="218" height="188" align="right">
<tr><td>Bogor,</td></tr>
  <tr valign="bottom">
    <td width="226" height="135"><p align="center">Kepala Sekola </p>
    <p>&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center"> Dori Hidayat, S.Pd.I</p>
	</td>
</tr>
<tr valign="top">
<td height="3" align="center"><hr color="#000000" size="1" width="160"></td>
</tr>
<tr valign="top">
<td height="17"><div align="center"><font size='2'>NUPTK: 1857757659200032</font></div></td>
</tr>
</table>
</div>
<p>&nbsp;</p>
</body>
</html>