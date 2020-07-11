<?php
include "../../koneksi.php";
$no=$_POST['id_kriteria'];
$c1=$_POST['a1'];
$c2=$_POST['a2'];
$c3=$_POST['a3'];
$c4=$_POST['a4'];
$c5=$_POST['a5'];
$c6=$_POST['a6'];

$query=mysqli_query($GLOBALS["___mysqli_ston"], "update kriteria set c1='$c1', c2='$c2', c3='$c3', c4='$c4', c5='$c5', c6='$c6' where id_kriteria='$no'");

if($query){
echo "<script language='javascript'>
document.location='../data_kribot.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../data_kribot.php';
</script>";
}
?>