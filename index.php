
<html>
<head>
<title>Pemilihan Guru Terbaik</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='img/icon.jpg'></link>
</head>
<body>
<div id="container">

<?php include "header.php"; ?>
<div class="conten">
<p>
				<?php
				include "koneksi.php";
					$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from data where ID='1'");
					while ($tampil = mysqli_fetch_array($query))
					{
					$isi = $tampil['isi'];
					echo "<p>$isi</p>";
					}
				?>
</p>
<br><br>
</div>

<?php include "footer.php"; ?>


</div>

<br><br>
</body>
</html>