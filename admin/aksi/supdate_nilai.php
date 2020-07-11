<?php
include "../../koneksi.php";

$id_nilai=$_POST['id_nilai'];


$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];

if ($c1 < 1)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Kehadiran harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c2 < 1)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Kemampuan mengajar harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c3 < 1)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Penguasaan materi harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c4 < 1)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Tanggung Jawab harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c5 < 1)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Perilaku harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c6 < 1)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Prestasi harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c1 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Kehadiran harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c2 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Kemampuan Mengajar harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c3 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Penguasaan materi harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c4 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Tanggung Jawab harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c5 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Perilaku harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
elseif ($c6 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Prestasi harus 1 - 100');
document.location='../tambah_nilai.php';
</script>";
}
else
{
$query=mysqli_query($GLOBALS["___mysqli_ston"], "update penilaian set c1='$c1', c2='$c2', c3='$c3', c4='$c4', c5='$c5', c6='$c6' where id_nilai='$id_nilai'");

if($query){
echo "<script language='javascript'>
document.location='../data_nilai.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../data_nilai.php';
</script>";
}
}
?>