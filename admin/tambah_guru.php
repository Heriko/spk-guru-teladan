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

<form id="FNilai" name="FNilai" method="post" action="aksi/simpan_guru.php">
<pre>
NUPTK		<input type="text" name="nuptk" maxlength="16" placeholder="angka" onKeyPress="return goodchars(event,'0123456789',this)"/><br>
Nama Guru	<input type="text" name="nama" required="required"/><br>
Jenis Kelamin	<Input Type="radio" name="gender" value="Laki-laki" required="required"> Laki-laki	<Input Type="radio" name="gender" value="Perempuan" required="required"> Perempuan<br>
Alamat
		<textarea name="alamat" rows="5" required="required"></textarea>
</pre>
  <br />
    <input type="submit" name="submit" value="TAMBAH" /> <input type="reset" name="hapus" value="BATAL" />
</form>
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