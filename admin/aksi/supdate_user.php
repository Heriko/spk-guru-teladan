<?php
include "../../koneksi.php";
$id_user=$_POST['id_user'];

$a1=$_POST['u1'];
$a2=$_POST['u2'];
$a3=$_POST['u3'];

$query=mysqli_query($GLOBALS["___mysqli_ston"], "update user set nama='$a1', password='$a2', level='$a3' where id_user='$id_user'");

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
document.location='../data_user.php';
</script>";
}
?>
