<?php
include "../../koneksi.php";


$a1=$_POST['nama'];
$a2=$_POST['pass'];
$a3=$_POST['level'];



$query=mysqli_query($GLOBALS["___mysqli_ston"], "insert into user (nama, password, level) 
value ('$a1','$a2','$a3')");

if($query){
echo "<script language='javascript'>
document.location='../data_user.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../tambah_user.php';
</script>";
}
?>