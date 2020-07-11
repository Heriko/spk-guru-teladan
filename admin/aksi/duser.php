
<?php
include("../../koneksi.php");

$id_user = $_GET['id_user'];
$query = mysqli_query($GLOBALS["___mysqli_ston"], "delete from user where id_user='$id_user'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));

if ($query) 
if($query){
echo "
<script language='javascript'>document.location.href='../data_user.php';</script>
";
}else{
echo "
<script language='javascript'>
alert('Gagal Menghapus');
document.location='../data_user.php';
</script>
";

}
?>