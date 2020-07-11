<?php
include "../../koneksi.php";

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
			
		}

	
	$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM penilaian");
//Buat tabel untuk menampilkan hasil
$i = 0;
$nilai = array();
while ($data = mysqli_fetch_array($sql2)) {
    $nilai[$i]= pow($data['c1'],$bbaru1) * pow($data['c2'],$bbaru2) *
    			 pow($data['c3'],$bbaru3) * pow($data['c4'],$bbaru4) *
    			 pow($data['c5'],$bbaru5) * pow($data['c6'],$bbaru6);
$i++;
}

$jml=round(array_sum($nilai),4);
$sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM penilaian");
$i=0;
while ($data = mysqli_fetch_array($sql3)) {
$v=round($nilai[$i]/ $jml,4);
$n=$data['id_nilai'];

$query= mysqli_query($GLOBALS["___mysqli_ston"], "update penilaian set jumlah = '$v' where id_nilai = '$n '");
	$i++;
	}
	if($query){
echo "<script language='javascript'>
document.location='../tambah_nilai.php';
</script>";
}else{
echo
"<script language='javascript'>
document.location='../tambah_nilai.php';
</script>";
}
?>