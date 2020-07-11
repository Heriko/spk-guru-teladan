<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['pass'];
// query untuk mendapatkan record dari username
$query = "SELECT * FROM user WHERE nama = '$username'";
$hasil = mysqli_query($GLOBALS["___mysqli_ston"], $query);
$data = mysqli_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['password'])
{
echo "sukses";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];
    header('location:sesionlevel.php');
}
else
{
echo
"<script language='javascript'>
alert('Login gagal');
document.location='login.php';
</script>";
}
?>