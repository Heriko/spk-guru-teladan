<html>
<head>
<title>Sistem Seleksi Pemilihan Guru Terbaik</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='img/icon.jpg'></link>
</head>
<body>
<div id="container">

<?php include "header.php"; ?>

<div class="conten">
<form method="POST" action="logproses.php">
<table cellspacing="10" align="center">
  <tr>
    <td height="47" colspan="2" valign="middle">SILAHKAN MELAKUKAN LOGIN </td>
  </tr>
  <tr>
    <td width="15%">Nama</td>
    <td width="85%" ><input type="text" name="username" required="required" placeholder="user name"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td> <input type="password" name="pass" required="required" placeholder="password"></td>
  </tr>
  <tr>
    <td><input type="submit" name="Submit" value="Login"></td>
    <td><input type="reset" name="Submit" value="Batal"></td>
  </tr>
</table>

</form>
<br><br>
</div>

<?php include "footer.php"; ?>

</div>

<br><br>
</body>
</html>
