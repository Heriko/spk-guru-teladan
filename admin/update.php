<?php
include "../koneksi.php";

$sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM guru");
$i=0;
while ($data = mysqli_fetch_array($sql3)) {
$v=$data['id_guru'];
$sql4 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM penilaian");
while ($dt = mysqli_fetch_array($sql4)) {
$n=$dt['id_nilai'];
$query = mysqli_query($GLOBALS["___mysqli_ston"], "update penilaian set id_guru = '$v' where id_nilai = '$n '");
$i++;
}
}
if($query){
echo "<script language='javascript'>
alert('Menyimpan');
document.location='data_guru.php';
</script>";
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='data_guru.php';
</script>";
}
?>
