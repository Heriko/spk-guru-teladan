<?php
include "../../koneksi.php";
$id_guru=$_POST['id_guru'];

$nuptk=$_POST['nuptk'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];

if (is_numeric($a2))
{
echo
"<script language='javascript'>
alert('Maaf nama harus berupa huruf');
document.location='../tambah_guru.php';
</script>";
}
else
{
//tabel guru
$query=mysqli_query($GLOBALS["___mysqli_ston"], "update guru set nuptk='$nuptk', nama='$a1', gender='$a2', alamat='$a3' where id_guru='$id_guru'");
//tabel penilaian
$query = mysqli_query($GLOBALS["___mysqli_ston"], "update penilaian set nama='$a1' where id_guru='$id_guru'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
if($query){
echo "<script language='javascript'>
document.location='../data_guru.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../data_guru.php';
</script>";
}
}
?>
