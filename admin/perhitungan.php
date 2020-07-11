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
			<td><?php echo $dt['nama'];?></td>
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
echo "<br>";
	$query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM bobot");
		while($tampil = mysqli_fetch_array($query))
		{
			$b1 = $tampil['b1'];
			$b2 = $tampil['b2'];
			$b3 = $tampil['b3'];
			$b4 = $tampil['b4'];
			$b5 = $tampil['b5'];
			$b6 = $tampil['b6'];
			$total = "$b1"+"$b2"+"$b3"+"$b4"+"$b5"+"$b6";
			$p1="$b1"/"$total"; $p2="$b2"/"$total"; $p3="$b3"/"$total"; $p4="$b4"/"$total"; $p5="$b5"/"$total"; $p6="$b6"/"$total";
			$b=1;
			$c=1;
			
			$bbaru1=round("$p1"/"$b",4); $bbaru2=round("$p2"/"$c",4); $bbaru3=round("$p3"/"$b",4); 
			$bbaru4=round("$p4"/"$c",4); $bbaru5=round("$p5"/"$b",4); $bbaru6=round("$p6"/"$c",4);
			
			echo
			"
			<table border='1' align='center'>
				<tr>
					<td width='100px' >Bobot</td>
					<td width='60px' align='center'>$b1</td>
					<td width='60px' align='center'>$b2</td>
					<td width='60px' align='center'>$b3</td>
					<td width='60px' align='center'>$b4</td>
					<td width='60px' align='center'>$b5</td>
					<td width='60px' align='center' >$b6</td>
				</tr>				
				<tr>
					<td>Bobot Baru</td>
					<td align='center'>$bbaru1</td>
					<td align='center'>$bbaru2</td>
					<td align='center'>$bbaru3</td>
					<td align='center'>$bbaru4</td>
					<td align='center'>$bbaru5</td>
					<td align='center'>$bbaru6</td>
				</tr>
				</table>
			";
		}
echo "<br>";
echo "<br>";
	
	$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM penilaian");
//Buat tabel untuk menampilkan hasil
echo "<H3> <center>Hasil Perhitungan Nilai Dengan Bobot</center></H3>
<table border='1' align='center'>
    <tr color='grey'>
        <th width='30'>No</th><th width='150'>NAMA</th><th>Nilai Pertama</th>
    </tr>
";
$no = 1;
$i = 0;
$nilai = array();
while ($data = mysqli_fetch_array($sql2)) {
    $nilai[$i]= pow($data['c1'],$bbaru1) * pow($data['c2'],$bbaru2) *
    			 pow($data['c3'],$bbaru3) * pow($data['c4'],$bbaru4) *
    			 pow($data['c5'],$bbaru5) * pow($data['c6'],$bbaru6);
    echo "<tr>
        <td align='center'>$no</td><td>".$data['nama']."</td><td align='center' width='79'>".round($nilai[$i],4)."</td>
    </tr>";
$no++;
$i++;
}
echo "</table>";

echo "<H3><center>Hasil Perhitungan Akhir</center></H3>";

$jml=round(array_sum($nilai),4);
$sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM penilaian");
//Jumlah Nilai S = $jml

echo "

<table border='1' align='center'>
    <tr >
        <th width='30'>No</th><th width='150'>NAMA</th><th width='100'>Nilai Akhir</th>
    </tr>
";
$no = 1;
$i=0;

//Kita gunakan rumus (si/ jml si)
while ($data = mysqli_fetch_array($sql3)) {
    echo "<tr>
        <td align='center'>".$no."</td><td>".$data['nama']."</td>
        <td align='center'>".round($nilai[$i]/ $jml,4)."</td>
    </tr>";
$no++;
$i++;   
}
echo "</table>";
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