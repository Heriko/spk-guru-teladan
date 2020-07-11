<?php
include "../../koneksi.php";


$a1=$_POST['nuptk'];
$a2=$_POST['nama'];
$a3=$_POST['gender'];
$a4=$_POST['alamat'];

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
$query=mysqli_query($GLOBALS["___mysqli_ston"], "insert into guru (nuptk, nama, gender, alamat) 
value ('$a1','$a2','$a3','$a4')");

if($query){
echo "<script language='javascript'>
document.location='../tambah_nilai.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../tambah_guru.php';
</script>";
}
}
?>