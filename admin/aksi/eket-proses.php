<?php
include "../../koneksi.php";

$isi =$_POST['isi'];

$query=mysqli_query($GLOBALS["___mysqli_ston"], "update data SET isi='$isi' WHERE id='2'");

if($query){
echo "<script language='javascript'>
document.location='../eketerangan.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../eketerangan.php';
</script>";
}
?>