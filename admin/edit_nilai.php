<?php
// memulai session
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "admin")
   {   


?>
<html>
<head>
<title>ADMIN</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>
<script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>
</head>
<body>
<div id="container">

<div class="header">
<?php include "header.php"; ?>
</div>

<div class="conten">

<?php
include "../koneksi.php";
$id_nilai=$_GET['id_nilai'];
$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from penilaian where id_nilai='$id_nilai'");
?>
<form id="FNilai" name="FNilai" action="aksi/supdate_nilai.php" method="post">
<table border="1" align="center">
<?php
while($row=mysqli_fetch_array($query)){
?>
<input type="hidden" name="id_nilai" value="<?php echo $id_nilai;?>"/>
<tr><td width="180px">Nama Guru</td> <td width="180px"><?php echo $row['nama'];?></td></tr>
<tr><td>Kehadiran</td> <td><input type="text" name="c1" size="5" required="required" value="<?php echo $row['c1'];?>" onKeyPress="return goodchars(event,'0123456789',this)"/></td></tr>
<tr><td>Prestasi</td> <td><input type="text" name="c2" size="5" required="required" value="<?php echo $row['c2'];?>" onKeyPress="return goodchars(event,'0123456789',this)"/></td></tr>
<tr><td>Penguasaan Materi</td> <td><input type="text" name="c3" size="5" required="required" value="<?php echo $row['c3'];?>" onKeyPress="return goodchars(event,'0123456789',this)"/></td></tr>
<tr><td>Loyalitas</td> <td><input type="text" name="c4" size="5" required="required" value="<?php echo $row['c4'];?>" onKeyPress="return goodchars(event,'0123456789',this)"/></td></tr>
<tr><td>Prilaku</td> <td><input type="text" name="c5" size="5" required="required" value="<?php echo $row['c5'];?>" onKeyPress="return goodchars(event,'0123456789',this)"/></td></tr>
<tr><td>Cara Mengajar</td> <td><input type="text" name="c6" required="required" size="5" value="<?php echo $row['c6'];?>" onKeyPress="return goodchars(event,'0123456789',this)"/></td></tr>
<tr>
<td><input type="submit" value="UPDATE" name="simpan" /></td>
</tr>
</table>
<?php
}
?>

</div>

<div class="footer">
<?php include "footer.php"; ?>
</div>


</div>


</body>
</html>

<?php
   }
   else if ($_SESSION['level'] == "user")
   {
       header('location:../guru/index.php');
   }
   else
{
	?><script language="javascript">
	alert("Halaman Admin, Silahkan LOGIN");
	document.location="../login.php";
	</script>
	<?php
}
}  
if (!isset($_SESSION['level']))
{
	header('location:../login.php');
}
?>