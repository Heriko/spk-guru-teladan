
<?php
include("../../koneksi.php");

$id_guru = $_GET['id_guru'];
//tabel guru
$query = mysqli_query($GLOBALS["___mysqli_ston"], "delete from guru where id_guru='$id_guru'");
//tabel penilaian
$query = mysqli_query($GLOBALS["___mysqli_ston"], "delete from penilaian where id_guru='$id_guru'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
if($query){
echo "
<script language='javascript'>document.location.href='seleksi.php';</script>
";
}else{
echo "
<script language='javascript'>
alert('Gagal Menghapus');
document.location='../data_guru.php';
</script>
";

}
?>