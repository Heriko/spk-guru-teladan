
<?php
include("../../koneksi.php");

$id_nilai = $_GET['id_nilai'];
$query = mysqli_query($GLOBALS["___mysqli_ston"], "delete from penilaian where id_nilai='$id_nilai'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));

if ($query) 
if($query){
echo "
<script language='javascript'>document.location.href='seleksi.php';</script>
";
}else{
echo "
<script language='javascript'>
alert('Gagal Menghapus');
document.location='../data_nilai.php';
</script>
";

}
?>